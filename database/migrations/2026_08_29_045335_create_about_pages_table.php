<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('about_pages', function (Blueprint $table) {
            $table->id();

            $table->string('page_heading');
            
            $table->string('video_title')->nullable();
            $table->string('video_url')->nullable();

            $table->string('article_heading');
            $table->text('article_content');

            $table->json('core_pillars');
            
            $table->string('impact_heading');
            $table->json('impact_items');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('about_pages');
    }
};