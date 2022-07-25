<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware('can:pengajuanlegalisir-admin')->group(function () {
    include "pengajuanlegalisir/admin.php";
});


Route::prefix('kepalabaak')->middleware('can:pengajuanlegalisir-kepalabaak')->group(function () {
    include "pengajuanlegalisir/kepalabaak.php";
});