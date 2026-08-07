<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilJurusan extends Model
{
    use HasFactory;

    protected $table = 'profil_jurusan';

    protected $fillable = [
        'nama_jurusan', 'slogan', 'deskripsi', 'visi', 'misi',
        'tujuan', 'kompetensi', 'peluang_karier', 'fasilitas',
        'foto_banner', 'foto_profil',
    ];
}
