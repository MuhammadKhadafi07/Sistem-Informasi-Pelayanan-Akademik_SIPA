<?php

use App\Http\Controllers\MasterData\Etiket\Admin\DitolakController;
use App\Http\Controllers\MasterData\Etiket\Admin\EtiketController;
use App\Http\Controllers\MasterData\Etiket\Admin\MasalahController;
use App\Http\Controllers\MasterData\Etiket\Admin\RiwayatController;
use App\Http\Controllers\MasterData\Etiket\Admin\SelesaiController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'admin/etiket');


Route::put('etiket/selesai/{id}', [EtiketController::class, 'selesai']);
Route::put('etiket/{keteranganditolak}/tolak', [EtiketController::class, 'keteranganditolak']);
Route::get('etiket/tolak/{tolak}', [EtiketController::class, 'tolak']);
Route::put('etiket/{keteranganselesai}/selesai', [EtiketController::class, 'keteranganselesai']);
Route::get('etiket/selesai/{selesai}', [EtiketController::class, 'selesai']);
Route::resource('etiket', EtiketController::class);


Route::put('selesai/proses/{id}', [SelesaiController::class, 'proses']);
Route::resource('selesai', SelesaiController::class);


Route::put('ditolak/proses/{ditolak}', [DitolakController::class, 'proses']);
Route::resource('ditolak', DitolakController::class);


Route::resource('masalah', MasalahController::class);