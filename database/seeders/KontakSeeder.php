<?php

namespace Database\Seeders;

use App\Models\Kontak;
use Illuminate\Database\Seeder;

class KontakSeeder extends Seeder
{
    public function run(): void
    {
        Kontak::create([
            'alamat'      => 'Jl. Pendidikan No. 123, Kecamatan Sukamaju, Kota Bandung, Jawa Barat 40123',
            'telepon'     => '(022) 1234-5678',
            'email'       => 'rpl@smkn1bandung.sch.id',
            'instagram'   => 'https://instagram.com/rpl.smkn1bandung',
            'facebook'    => 'https://facebook.com/rpl.smkn1bandung',
            'youtube'     => 'https://youtube.com/@rplsmkn1bandung',
            'google_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.1234567890!2d107.6191228!3d-6.9174639!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwNTUnMDIuOSJTIDEwN8KwMzcnMDguOCJF!5e0!3m2!1sen!2sid!4v1234567890" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
        ]);
    }
}
