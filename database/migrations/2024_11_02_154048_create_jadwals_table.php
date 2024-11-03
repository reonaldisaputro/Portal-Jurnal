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
        Schema::create('jadwals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('day_id')->nullable()->constrained('days')->onDelete('cascade');
            $table->foreignId('kelas_id')->nullable()->constrained('kelas')->onDelete('cascade');
            $table->foreignId('mata_kuliah_id')->nullable()->constrained('mata_kuliahs')->onDelete('cascade');
            $table->foreignId('dosen_id')->nullable()->constrained('dosens')->onDelete('cascade');
            $table->string('ruang');
            $table->time('jam_mulai');
            $table->time('jam_selesai');
            $table->string('link_zoom')->nullable();
            $table->boolean('is_online');
            $table->string('color')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwals');
    }
};
