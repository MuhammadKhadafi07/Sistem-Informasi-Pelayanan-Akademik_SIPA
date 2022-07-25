<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware('can:pengajuansuratketeranganaktif-admin')->group(function () {
        include "pengajuansuratketeranganaktif/admin.php";
});

Route::prefix('kepalabaak')->middleware('can:pengajuansuratketeranganaktif-kepalabaak')->group(function () {
        include "pengajuansuratketeranganaktif/kepalabaak.php";
});