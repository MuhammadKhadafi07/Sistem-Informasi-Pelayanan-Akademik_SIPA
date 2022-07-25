<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware('can:etiket-admin')->group(function () {
    include "etiket/admin.php";
});

Route::prefix('kepalabaak')->middleware('can:etiket-kepalabaak')->group(function () {
    include "etiket/kepalabaak.php";
});