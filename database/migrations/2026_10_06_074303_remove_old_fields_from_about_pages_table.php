<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('about_pages', function (Blueprint $table) {
            $table->dropColumn([
                'page_heading',
                'video_title',
                'video_url',
                'article_heading',
                'core_pillars',
                'impact_heading',
                'impact_items',
            ]);
        });
    }

    public function down(): void
    {
        Schema::table('about_pages', function (Blueprint $table) {
            $table->string('page_heading')->nullable();
            $table->string('video_title')->nullable();
            $table->string('video_url')->nullable();
            $table->string('article_heading')->nullable();
            $table->json('core_pillars')->nullable();
            $table->string('impact_heading')->nullable();
            $table->json('impact_items')->nullable();
        });
    }
};