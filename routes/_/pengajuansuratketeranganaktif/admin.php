<?php

use App\Http\Controllers\MasterData\PengajuanSuratKeteranganAktif\Admin\PengajuanDisetujuiController;
use App\Http\Controllers\MasterData\PengajuanSuratKeteranganAktif\Admin\PengajuanDitolakController;
use App\Http\Controllers\MasterData\PengajuanSuratKeteranganAktif\Admin\PengajuanMasukController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'admin/pengajuanmasuk');

// Dafi mencobe
// Route::put('pengajuansuratketeranganaktif/kirim-surat/{pengajuansuratketeranganaktif}', [PengajuanSuratKeteranganAktifController::class, 'kirim_suratketeranganaktif']);

// Pengajuan Masuk
Route::put('pengajuanmasuk/setuju/{setuju}', [PengajuanMasukController::class, 'setuju']);
Route::put('pengajuanmasuk/tolak/{pesan}', [PengajuanMasukController::class, 'pesan']);
Route::get('pengajuanmasuk/{pesan}/tolak', [PengajuanMasukController::class, 'tolak']);
Route::resource('pengajuanmasuk', PengajuanMasukController::class);

// Pengajuan Disetujui
Route::get('pengajuandisetujui/{kirimsurat}/kirim', [PengajuanDisetujuiController::class, 'kirimsuratket']);
Route::put('pengajuandisetujui/diproses/{id}', [PengajuanDisetujuiController::class, 'diproses']);
Route::post('pengajuandisetujui/kirimsurat/{kirimsurat}', [PengajuanDisetujuiController::class, 'kirimsurat']);
Route::resource('pengajuandisetujui', PengajuanDisetujuiController::class);

// Riwayat Pengajuan
Route::put('pengajuanditolak/diproses/{id}', [PengajuanDitolakController::class, 'diproses']);
Route::resource('pengajuanditolak', PengajuanDitolakController::class);
