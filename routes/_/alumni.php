<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware('can:alumni-admin')->group(function () {
    include "alumni/admin.php";
});

Route::prefix('kepalabaak')->middleware('can:alumni-kepalabaak')->group(function () {
    include "alumni/kepalabaak.php";
});