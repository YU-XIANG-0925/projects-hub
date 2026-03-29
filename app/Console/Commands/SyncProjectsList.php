<?php

namespace App\Console\Commands;

use App\Models\Project;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class SyncProjectsList extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'projects:sync';


    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Recursive Scanning of the projects directory and update the projects list in the database';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // define base directory to scan
        $baseDir = resource_path('views/projects');

        // early exit
        if (!File::exists($baseDir)) {
            $this->error("Directory not found: {$baseDir}");
            return Command::FAILURE;
        }

        // get all project by using allFiles() to recursively scan
        $files = File::allFiles($baseDir);
        $count = 0;

        foreach ($files as $file) {
            // check shuffle and security, process blade files only
            // early exit if not blade file
            if (!str_ends_with($file->getFilename(), '.blade.php')) {
                $this->info("這不是視圖檔案，已跳過: {$file->getRelativePathname()}");
                continue;
            }

            $relativePath = str_replace('\\', '/', $file->getRelativePath());
            if (empty($relativePath)) {
                $this->info("檔案位於根目錄，已跳過: {$file->getRelativePathname()}");
                continue;
            }

            $pathSegments = explode('/', $relativePath);
            $type = $pathSegments[0];

            $fileName = $file->getFilename();
            $slug = str_replace('.blade.php', '', $fileName);

            // write to database, First or Create
            $project = Project::firstOrCreate(

                ['slug' => $slug],
                [
                    // 根據 Project.php 定義的 $fillable 欄位進行預設值映射
                    'title'        => $slug,
                    'summary'      => NULL,
                    'type'         => "embed",
                    'demo_url'     => "/projects/{$type}/{$slug}",
                    'repo_url'     => NULL,
                    // 動態生成對應的嵌入網址
                    'embed_url'    => "/projects/{$type}/{$slug}",
                    'tech_stack'   => NULL,
                    'content'      => NULL,
                    // 預設為發布狀態，方便直接預覽
                    'is_published' => 1,
                    // 預設排序權重為 0
                    'sort_order'   => 0,
                ]
            );

            if ($project->wasRecentlyCreated) {
                $count++;
                $this->info("新增專案: {$project->title} ({$project->type}/{$project->slug})");
            }
        }
        $this->info("掃描與同步作業完成！本次共新增了 {$count} 筆新專案。");
        return Command::SUCCESS;
    }
}
