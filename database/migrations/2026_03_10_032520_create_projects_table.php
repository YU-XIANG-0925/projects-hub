<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('summary')->nullable();

            // hosted: runs on this server, external: link out, embed: iframe inside show page
            $table->string('type')->default('external');

            $table->string('demo_url')->nullable();
            $table->string('repo_url')->nullable();
            $table->string('embed_url')->nullable();
            $table->string('tech_stack')->nullable();
            $table->text('content')->nullable();

            $table->boolean('is_published')->default(true);
            $table->integer('sort_order')->default(0);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
