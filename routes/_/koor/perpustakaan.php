<?php

use App\Http\Controllers\Koor\Perpustakaan\KoorController;
use App\Http\Controllers\Koor\Perpustakaan\PengumpulanBerkasController;
use App\Http\Controllers\Koor\Perpustakaan\RiwayatPengumpulanBerkasController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'perpustakaan/pengumpulanberkas');

Route::put('pengumpulanberkas/konfirmasi/{id}', [PengumpulanBerkasController::class, 'konfirmasi']);
Route::resource('pengumpulanberkas', PengumpulanBerkasController::class);
Route::put('riwayatpengumpulanberkas/cancel/{id}', [RiwayatPengumpulanBerkasController::class, 'cancel']);
Route::resource('riwayatpengumpulanberkas', RiwayatPengumpulanBerkasController::class);