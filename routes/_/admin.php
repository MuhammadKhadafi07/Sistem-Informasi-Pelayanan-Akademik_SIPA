<?php

use App\Http\Controllers\Admin\MasterData\MahasiswaController;
use App\Http\Controllers\Admin\MasterData\PegawaiController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'admin/master-data/pegawai');

Route::resource('master-data/mahasiswa', MahasiswaController::class);
Route::resource('master-data/pegawai', PegawaiController::class);