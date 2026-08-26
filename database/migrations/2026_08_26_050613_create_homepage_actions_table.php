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
        Schema::create('homepage_actions', function (Blueprint $table) {
            $table->id();

            $table->string('label');
            $table->string('heading');
            $table->text('description');

            $table->string('primary_button_text');
            $table->string('primary_button_url');

            $table->string('secondary_button_text');
            $table->string('secondary_button_url');

            $table->text('quote');
            $table->string('author_name');
            $table->string('author_role');
            $table->string('author_image')->nullable();

            $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homepage_actions');
    }
};
