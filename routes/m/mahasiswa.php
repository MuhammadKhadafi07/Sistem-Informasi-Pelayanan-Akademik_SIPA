<?php

use App\Http\Controllers\Mahasiswa\DashboardController;
use App\Http\Controllers\Mahasiswa\EtiketController;
use App\Http\Controllers\Mahasiswa\PengajuanSuratKeteranganAktif\PengajuanSuratKeteranganAktifController;
use App\Http\Controllers\Mahasiswa\Pkkmb\PertemuanController;
use App\Http\Controllers\Mahasiswa\Pkkmb\PkkmbController;
use Illuminate\Support\Facades\Route;

// Beranda
Route::resource('dashboard', DashboardController::class);

// Pkkmb
Route::resource('pkkmb', PkkmbController::class);
Route::resource('absen', PertemuanController::class);

// Etiket
Route::resource('etiket', EtiketController::class);

// Pengajuan Surat Keterangan Aktif
Route::resource('pengajuansuratketeranganaktif', PengajuanSuratKeteranganAktifController::class);

