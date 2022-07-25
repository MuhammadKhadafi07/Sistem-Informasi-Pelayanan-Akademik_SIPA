<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Mahasiswa\DashboardController;
use App\Http\Controllers\Profile\PegawaiProfileController;
use App\Http\Controllers\Profile\PenggunaProfileController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::redirect('/', 'login');

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

// Profile Dafi's Created
Route::resource('profile/pegawai', PegawaiProfileController::class);
Route::resource('profile/pengguna', PenggunaProfileController::class);
// End Profile

Route::resource('register', RegisterController::class);



Route::middleware('auth')->group(function () {
    Route::prefix('superadmin')
        ->middleware('can:sipa-superadmin')
        ->group(function () {
            include "_/superadmin.php";
    });
    Route::prefix('pkkmb')->group(function () {
        include "_/pkkmb.php";
    });
    Route::prefix('etiket')->group(function () {
        include "_/etiket.php";
    });
    Route::prefix('alumni')->group(function () {
        include "_/alumni.php";
    });
    Route::prefix('pengajuansuratketeranganaktif')->group(function () {
        include "_/pengajuansuratketeranganaktif.php";
    });
    Route::prefix('pengajuanlegalisir')->group(function () {
        include "_/pengajuanlegalisir.php";
    });
    Route::prefix('admin')->middleware('can:sipa-admin')->group(function () {
        include "_/admin.php";
    });
    Route::prefix('pengajuanpengambilanijazah')->group(function () {
        include "_/pengajuanpengambilanijazah.php";
    });
    Route::prefix('koor')->group(function () {
        include "_/koor.php";
    });
});


// ORIGINAL FORM PAK RAZY
// Route::prefix('mahasiswa')->middleware('auth:mahasiswa')->group(function () {
//     Route::get('/', DashboardController::class);
// });

//


Route::middleware('auth:mahasiswa')->group(function () {
    Route::prefix(('mahasiswa'))->group(function () {
        include "m/mahasiswa.php";
    });
});

Route::middleware('auth:mahasiswa')->group(function () {
    Route::prefix(('alumni'))->group(function () {
        include "m/alumni.php";
    });
});
