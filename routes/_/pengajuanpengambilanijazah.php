<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware('can:pengajuanpengambilanijazah-admin')->group(function () {
    include "pengajuanpengambilanijazah/admin.php";
});

Route::prefix('kepalabaak')->middleware('can:pengajuanpengambilanijazah-kepalabaak')->group(function () {
    include "pengajuanpengambilanijazah/kepalabaak.php";
});