<?php

use App\Http\Controllers\MasterData\Alumni\Admin\AlumniController;
use App\Http\Controllers\MasterData\Alumni\Admin\BukuAlumniController;
use App\Http\Controllers\MasterData\Alumni\Admin\TambahBukuController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'admin/alumni');

Route::resource('alumni', AlumniController::class);
Route::resource('bukualumni', BukuAlumniController::class);