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
        Schema::table('authors', function (Blueprint $table) {
            $table->string('email')->unique();
            $table->string('password');
            $table->string('phone');
            $table->string('angkatan')->nullable();
            $table->string('jurusan')->nullable();
            $table->string('instagram')->nullable();
            $table->string('facebook')->nullable();
            $table->string('youtube')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('twitter')->nullable();
            $table->string('tiktok')->nullable();
            $table->enum('status', ['pending', 'accept', 'reject'])->default('pending');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('authors', function (Blueprint $table) {
            $table->dropColumn('email');
            $table->dropColumn('password');
            $table->dropColumn('phone');
            $table->dropColumn('angkatan');
            $table->dropColumn('jurusan');
            $table->dropColumn('instagram');
            $table->dropColumn('facebook');
            $table->dropColumn('youtube');
            $table->dropColumn('linkedin');
            $table->dropColumn('twitter');
            $table->dropColumn('tiktok');
            $table->dropColumn('status');
        });
    }
};
