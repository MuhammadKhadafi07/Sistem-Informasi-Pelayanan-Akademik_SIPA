<?php

use App\Http\Controllers\MasterData\PengajuanLegalisir\Admin\LegalisirSelesaiController;
use App\Http\Controllers\MasterData\PengajuanLegalisir\Admin\PengajuanLegalisirController;
use App\Http\Controllers\MasterData\PengajuanLegalisir\Admin\RiwayatPengajuanController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'admin/pengajuanlegalisir');

// Route::put('pengajuanlegalisir/selesai/{id}', [PengajuanLegalisirController::class, 'selesai']);
Route::put('pengajuanlegalisir/selesai/{selesai}', [PengajuanLegalisirController::class, 'ket_pengambilan']);
Route::get('pengajuanlegalisir/{selesai}/selesai', [PengajuanLegalisirController::class, 'selesai']);
Route::resource('pengajuanlegalisir', PengajuanLegalisirController::class);


Route::put('legalisirselesai/clear/{clear}', [LegalisirSelesaiController::class, 'clear']);
Route::put('legalisirselesai/proses/{id}', [LegalisirSelesaiController::class, 'proses']);
Route::resource('legalisirselesai', LegalisirSelesaiController::class);


Route::put('riwayatpengajuan/proses/{id}', [RiwayatPengajuanController::class, 'proses']);
Route::resource('riwayatpengajuan', RiwayatPengajuanController::class);