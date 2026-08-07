<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class KontakController extends Controller
{
    public function index()
    {
        $kontak = Schema::hasTable('kontak') ? Kontak::first() : null;
        return view('kontak', compact('kontak'));
    }

    public function kirim(Request $request)
    {
        $request->validate([
            'nama'  => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'pesan' => 'required|string|max:1000',
        ], [
            'nama.required'  => 'Nama wajib diisi.',
            'email.required' => 'Email wajib diisi.',
            'email.email'    => 'Format email tidak valid.',
            'pesan.required' => 'Pesan wajib diisi.',
        ]);

        // Di sini bisa ditambahkan logika kirim email / simpan ke database
        return redirect()->route('kontak.index')->with('success', 'Pesan Anda berhasil dikirim. Kami akan segera menghubungi Anda!');
    }
}
