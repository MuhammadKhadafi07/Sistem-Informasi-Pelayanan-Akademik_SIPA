<?php

use App\Http\Controllers\MasterData\PengajuanSuratKeteranganAktif\KepalaBaak\PengajuanDisetujuiController;
use App\Http\Controllers\MasterData\PengajuanSuratKeteranganAktif\KepalaBaak\PengajuanDitolakController;
use App\Http\Controllers\MasterData\PengajuanSuratKeteranganAktif\KepalaBaak\PengajuanMasukController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'kepalabaak/pengajuanmasuk');

Route::resource('pengajuanmasuk', PengajuanMasukController::class);
Route::resource('pengajuandisetujui', PengajuanDisetujuiController::class);
Route::resource('pengajuanditolak', PengajuanDitolakController::class);