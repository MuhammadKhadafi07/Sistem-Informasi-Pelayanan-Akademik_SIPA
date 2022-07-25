<?php

use App\Http\Controllers\SuperAdmin\MasterData\MahasiswaController;
use App\Http\Controllers\SuperAdmin\MasterData\ModuleController;
use App\Http\Controllers\SuperAdmin\MasterData\PegawaiController;
use App\Http\Controllers\SuperAdmin\MasterData\LoginController;
use Illuminate\Support\Facades\Route;

Route::resource('master-data/mahasiswa', MahasiswaController::class);
Route::resource('master-data/pegawai', PegawaiController::class);
Route::post('master-data/module/add-role', [ModuleController::class, 'addRole']);
Route::get('master-data/module/delete-role/{role}', [ModuleController::class, 'deleteRole']);
Route::resource('master-data/module', ModuleController::class);
Route::resource('master-data/imagelogin', LoginController::class);


// Login Multi Role ->berhubungan dgn manageredirect
Route::redirect('/', 'superadmin/master-data/pegawai');

