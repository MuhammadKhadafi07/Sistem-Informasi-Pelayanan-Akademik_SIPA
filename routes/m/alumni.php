<?php

use App\Http\Controllers\Alumnis\AlumniController;
use App\Http\Controllers\Alumnis\BukuAlumniController;
use App\Http\Controllers\Alumnis\DashboardController;
use App\Http\Controllers\Alumnis\EtiketController;
use App\Http\Controllers\Alumnis\PengajuanLegalisirController;
use App\Http\Controllers\Alumnis\PengajuanPengambilanIjazahController;
use Illuminate\Support\Facades\Route;


// Beranda
Route::resource('dashboard', DashboardController::class);

// Alumni
// Route::post('bukualumnis/filter', [BukuAlumniController::class, 'filter']);
Route::resource('alumnis', AlumniController::class);
Route::resource('bukualumnis', BukuAlumniController::class);


// Etiket
Route::resource('etiket', EtiketController::class);

// Pengajuan Legalisir
Route::resource('pengajuanlegalisir', PengajuanLegalisirController::class);

// Pengajuan Pengambilan Ijazah
Route::resource('pengajuanpengambilanijazah', PengajuanPengambilanIjazahController::class);