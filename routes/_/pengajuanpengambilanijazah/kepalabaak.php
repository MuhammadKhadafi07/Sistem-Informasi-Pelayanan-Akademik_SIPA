<?php

use App\Http\Controllers\MasterData\PengajuanPengambilanIjazah\KepalaBaak\PengajuanPengambilanIjazahController;
use App\Http\Controllers\MasterData\PengajuanPengambilanIjazah\KepalaBaak\RiwayatPengajuanController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'kepalabaak/datapengajuan');

Route::resource('datapengajuan', PengajuanPengambilanIjazahController::class);
Route::resource('riwayatpengajuan', RiwayatPengajuanController::class);