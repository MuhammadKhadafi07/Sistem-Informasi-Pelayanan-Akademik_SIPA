<?php

use App\Http\Controllers\MasterData\PengajuanPengambilanIjazah\Admin\PengajuanPengambilanIjazahController;
use App\Http\Controllers\MasterData\PengajuanPengambilanIjazah\Admin\RiwayatPengajuanController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'admin/datapengajuan');

Route::put('datapengajuan/clear/{id}', [PengajuanPengambilanIjazahController::class, 'clear']);
Route::resource('datapengajuan', PengajuanPengambilanIjazahController::class);
Route::put('riwayatpengajuan/cancel/{id}', [RiwayatPengajuanController::class, 'cancel']);
Route::resource('riwayatpengajuan', RiwayatPengajuanController::class);