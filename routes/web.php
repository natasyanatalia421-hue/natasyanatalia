<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\KontakController;

Route::get('/', [ProfilController::class, 'index'])->name('profil.index');

Route::resource('guru', GuruController::class)->only(['index', 'create', 'store', 'edit', 'update', 'destroy']);
Route::resource('mapel', MapelController::class)->only(['index', 'create', 'store', 'edit', 'update', 'destroy']);

Route::get('/kontak', [KontakController::class, 'index'])->name('kontak.index');
Route::post('/kontak/kirim', [KontakController::class, 'kirim'])->name('kontak.kirim');
