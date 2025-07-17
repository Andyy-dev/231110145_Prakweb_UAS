<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;
use App\Models\Pasien; // ✅ Tambahkan ini

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::get('/dashboard', function () {
    $jumlahPasien = Pasien::count(); // ✅ Hitung total pasien
    return view('dashboard', compact('jumlahPasien'));
})->name('dashboard');

Route::resource('pasien', PasienController::class);