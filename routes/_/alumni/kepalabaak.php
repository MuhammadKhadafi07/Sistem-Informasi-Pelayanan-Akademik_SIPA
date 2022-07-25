<?php

use App\Http\Controllers\MasterData\Alumni\KepalaBaak\AlumniController;
use App\Http\Controllers\MasterData\Alumni\KepalaBaak\BukuAlumniController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'kepalabaak/alumni');

Route::resource('alumni', AlumniController::class);
Route::resource('bukualumni', BukuAlumniController::class);