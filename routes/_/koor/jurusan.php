<?php

use App\Http\Controllers\Koor\Jurusan\PengumpulanBerkasController;
use App\Http\Controllers\Koor\Jurusan\RiwayatPengumpulanBerkasController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'jurusan/pengumpulanberkas');

Route::put('pengumpulanberkas/konfirmasi/{id}', [PengumpulanBerkasController::class, 'konfirmasi']);
Route::resource('pengumpulanberkas', PengumpulanBerkasController::class);
Route::put('riwayatpengumpulanberkas/cancel/{id}', [RiwayatPengumpulanBerkasController::class, 'cancel']);
Route::resource('riwayatpengumpulanberkas', RiwayatPengumpulanBerkasController::class);