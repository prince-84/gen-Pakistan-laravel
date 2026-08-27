<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('homepage_news', function (Blueprint $table) {
            $table->id();

            $table->string('category');
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->date('published_at');

            $table->boolean('is_featured')->default(false);
            $table->string('button_url')->nullable();

            $table->integer('sort_order')->default(0);
            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homepage_news');
    }
};
