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
        Schema::create('dosen', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->string('slug')->unique();
            $table->bigInteger('nip')->unique();
            $table->string('tentang')->nullable();
            $table->json('pendidikan')->nullable();
            $table->string('google_scholar')->nullable();
            $table->string('website')->nullable();
            $table->string('scopus')->nullable();
            $table->string('sinta')->nullable();
            $table->string('foto')->nullable();
            $table->foreignId('user_id')->constrained('users')->onDelete('restrict');
            $table->foreignId('research_group_id')->constrained('research_group')->onDelete('restrict');
            $table->foreignId('prodi_id')->constrained('prodi')->onDelete('restrict');
            $table->foreignId('departemen_id')->constrained('departemen')->onDelete('restrict');
            $table->string('jabatan_rg', 50);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dosen');
    }
};
