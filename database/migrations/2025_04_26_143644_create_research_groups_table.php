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
        Schema::create('research_group', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('slug')->unique();
            $table->string('logo')->nullable();
            $table->string('tentang')->nullable();
            $table->string('foto_sampul')->nullable();
            $table->foreignId('prodi_id')->constrained('prodi')->onDelete('restrict');
            $table->foreignId('departemen_id')->constrained('departemen')->onDelete('restrict');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('research_group');
    }
};
