<?php

use App\Http\Controllers\MasterData\Pkkmb\KepalaBaak\AbsenController;
use App\Http\Controllers\MasterData\Pkkmb\KepalaBaak\PkkmbController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'kepalabaak/pkkmb');

Route::resource('pkkmb', PkkmbController::class);
Route::resource('absen', AbsenController::class);
Route::post('pkkmb/filter', [PkkmbController::class, 'filter']);