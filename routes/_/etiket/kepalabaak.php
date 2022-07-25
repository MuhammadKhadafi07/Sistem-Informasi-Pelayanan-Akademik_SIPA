<?php

use App\Http\Controllers\MasterData\Etiket\KepalaBaak\DitolakController;
use App\Http\Controllers\MasterData\Etiket\KepalaBaak\EtiketController;
use App\Http\Controllers\MasterData\Etiket\KepalaBaak\SelesaiController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'kepalabaak/etiket');

Route::resource('etiket', EtiketController::class);
Route::resource('ditolak', DitolakController::class);
Route::resource('selesai', SelesaiController::class);