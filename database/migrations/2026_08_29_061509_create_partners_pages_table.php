<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('partners_pages', function (Blueprint $table) {
            $table->id();

            $table->string('page_heading');
            $table->text('introduction');

            $table->json('platinum_partners');
            $table->json('silver_partners');
            $table->json('bronze_partners');
            $table->json('ecosystem_partners');

            $table->text('partnership_text');

            $table->string('apply_url')->nullable();
            $table->string('local_partnership_url')->nullable();

            $table->text('contact_text');
            $table->string('contact_person');
            $table->string('contact_email');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('partners_pages');
    }
};