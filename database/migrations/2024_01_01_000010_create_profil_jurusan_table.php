<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('profil_jurusan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_jurusan');
            $table->string('slogan')->nullable();
            $table->text('deskripsi')->nullable();
            $table->text('visi')->nullable();
            $table->text('misi')->nullable();
            $table->text('tujuan')->nullable();
            $table->text('kompetensi')->nullable();
            $table->text('peluang_karier')->nullable();
            $table->text('fasilitas')->nullable();
            $table->string('foto_banner')->nullable();
            $table->string('foto_profil')->nullable();
            $table->timestamps();
        });
    }
    public function down(): void { Schema::dropIfExists('profil_jurusan'); }
};
