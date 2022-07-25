<?php

use App\Http\Controllers\MasterData\PengajuanLegalisir\KepalaBaak\LegalisirSelesaiController;
use App\Http\Controllers\MasterData\PengajuanLegalisir\KepalaBaak\PengajuanLegalisirController;
use App\Http\Controllers\MasterData\PengajuanLegalisir\KepalaBaak\RiwayatPengajuanController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'kepalabaak/pengajuanlegalisir');

Route::resource('pengajuanlegalisir', PengajuanLegalisirController::class);
Route::resource('legalisirselesai', LegalisirSelesaiController::class);
Route::resource('riwayatpengajuan', RiwayatPengajuanController::class);