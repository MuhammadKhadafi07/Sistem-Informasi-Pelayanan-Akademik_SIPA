<?php

use App\Http\Controllers\MasterData\Pkkmb\Admin\KelompokController;
use App\Http\Controllers\MasterData\Pkkmb\Admin\PertemuanController;
use App\Http\Controllers\MasterData\Pkkmb\Admin\PkkmbController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'admin/pkkmb');

Route::resource('pkkmb', PkkmbController::class);
Route::resource('pertemuan', PertemuanController::class);
Route::resource('kelompok', KelompokController::class);
Route::post('pkkmb/filter', [PkkmbController::class, 'filter']);