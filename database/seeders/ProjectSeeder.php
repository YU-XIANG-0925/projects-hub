<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $projects = [
            [
                'title'      => 'Projects Hub',
                'slug'       => 'projects-hub',
                'summary'    => '個人作品集平台，以 Laravel 12 + Bootstrap 5.3 建構，整合 30+ 練習頁面與 CRUD 功能。',
                'type'       => 'github',
                'repo_url'   => 'https://github.com/YU-XIANG-0925/projects-hub',
                'tech_stack' => 'Laravel, Bootstrap, SQLite',
                'sort_order' => 1,
            ],
            [
                'title'      => 'URL Video Clip Downloader GUI',
                'slug'       => 'url-video-clip-downloader-gui',
                'summary'    => '以 Python + GUI 開發的影片下載工具，支援多平台影片截取下載。',
                'type'       => 'github',
                'repo_url'   => 'https://github.com/YU-XIANG-0925/URL-Video-Clip-Downloader-GUI',
                'tech_stack' => 'Python',
                'sort_order' => 2,
            ],
            [
                'title'      => 'GitHub 個人頁面',
                'slug'       => 'github-portfolio-site',
                'summary'    => '以 GitHub Pages 架設的個人靜態網站。',
                'type'       => 'github',
                'repo_url'   => 'https://github.com/YU-XIANG-0925/YU-XIANG-0925.github.io',
                'demo_url'   => 'https://yu-xiang-0925.github.io',
                'tech_stack' => 'HTML, CSS, JavaScript',
                'sort_order' => 3,
            ],
            [
                'title'      => 'Research System Project',
                'slug'       => 'research-system-project',
                'summary'    => '研究管理系統，支援資料收集、整理與分析流程。',
                'type'       => 'github',
                'repo_url'   => 'https://github.com/YU-XIANG-0925/research-system-project',
                'tech_stack' => 'PHP, MySQL',
                'sort_order' => 4,
            ],
            [
                'title'      => 'Emotional Labeling System',
                'slug'       => 'emotional-labeling-system',
                'summary'    => '情緒標註系統，用於標記與分類文本或資料的情緒類別。',
                'type'       => 'github',
                'repo_url'   => 'https://github.com/YU-XIANG-0925/Emotional-labeling-system',
                'tech_stack' => 'Python',
                'sort_order' => 5,
            ],
            [
                'title'      => 'GAI & Fullstack Class',
                'slug'       => 'gai-and-fullstack-class',
                'summary'    => '生成式 AI 與全端開發課程練習作業與範例程式集。',
                'type'       => 'github',
                'repo_url'   => 'https://github.com/YU-XIANG-0925/gai-and-fullstack-class',
                'tech_stack' => 'Python, JavaScript',
                'sort_order' => 6,
            ],
            [
                'title'      => 'Python DS Review',
                'slug'       => 'python-ds-review',
                'summary'    => 'Python 資料結構與演算法複習筆記與練習題集。',
                'type'       => 'github',
                'repo_url'   => 'https://github.com/YU-XIANG-0925/python-DS-review',
                'tech_stack' => 'Python',
                'sort_order' => 7,
            ],
        ];

        foreach ($projects as $data) {
            Project::firstOrCreate(['slug' => $data['slug']], $data);
        }
    }
}
