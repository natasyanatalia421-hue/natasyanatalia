<?php

namespace Database\Seeders;

use App\Models\ProfilJurusan;
use Illuminate\Database\Seeder;

class ProfilJurusanSeeder extends Seeder
{
    public function run(): void
    {
        ProfilJurusan::create([
            'nama_jurusan'  => 'Rekayasa Perangkat Lunak',
            'slogan'        => 'Mencetak Generasi Digital Unggul dan Berkarakter',
            'deskripsi'     => 'Jurusan Rekayasa Perangkat Lunak (RPL) adalah program keahlian yang mempersiapkan siswa menjadi tenaga ahli di bidang teknologi informasi dan pengembangan perangkat lunak. Kami berkomitmen menghasilkan lulusan yang kompeten, kreatif, dan siap bersaing di era industri 4.0.',
            'visi'          => 'Menjadi jurusan unggulan yang menghasilkan lulusan kompeten di bidang rekayasa perangkat lunak, berkarakter Pancasila, dan mampu bersaing di tingkat nasional maupun internasional.',
            'misi'          => "1. Menyelenggarakan pembelajaran berbasis kompetensi yang relevan dengan kebutuhan industri.\n2. Mengembangkan karakter siswa yang disiplin, inovatif, dan bertanggung jawab.\n3. Membangun kemitraan strategis dengan dunia usaha dan industri.\n4. Mendorong kreativitas dan inovasi melalui proyek nyata.\n5. Meningkatkan kualitas pendidik secara berkelanjutan.",
            'tujuan'        => "1. Menyiapkan lulusan yang mampu bekerja sebagai pengembang perangkat lunak profesional.\n2. Menghasilkan siswa yang memiliki kemampuan problem solving berbasis teknologi.\n3. Membekali siswa dengan kemampuan komunikasi dan kerja tim yang baik.\n4. Mendorong lulusan untuk berwirausaha di bidang teknologi informasi.",
            'kompetensi'    => "• Pemrograman Dasar dan Lanjutan (Web & Mobile)\n• Basis Data dan Manajemen Sistem Informasi\n• Jaringan Komputer dan Keamanan Sistem\n• Desain UI/UX Aplikasi Modern\n• Pengujian dan Debugging Perangkat Lunak\n• Manajemen Proyek Teknologi Informasi",
            'peluang_karier'=> "• Web Developer (Frontend/Backend/Fullstack)\n• Mobile Application Developer\n• Database Administrator\n• UI/UX Designer\n• Software Quality Assurance\n• IT Support Specialist\n• Entrepreneur di bidang teknologi",
            'fasilitas'     => "• Laboratorium Komputer ber-AC dengan spesifikasi terkini\n• Koneksi Internet Fiber Optic berkecepatan tinggi\n• Ruang Praktik Multimedia\n• Perpustakaan Digital\n• Ruang Kreatif dan Kolaborasi\n• Server Lokal untuk praktik jaringan",
            'foto_banner'   => null,
            'foto_profil'   => null,
        ]);
    }
}
