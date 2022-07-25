<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')
    ->middleware('can:pkkmb-admin')
    ->group(function () {
        include "pkkmb/admin.php";
});

Route::prefix('kepalabaak')->middleware('can:pkkmb-kepalabaak')->group(function () {
    include "pkkmb/kepalabaak.php";
});