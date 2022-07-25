<?php

use Illuminate\Support\Facades\Route;

Route::prefix('perpustakaan')->middleware('can:koor-perpustakaan')->group(function () {
    include "koor/perpustakaan.php";
});

Route::prefix('jurusan')->middleware('can:koor-jurusan')->group(function () {
    include "koor/jurusan.php";
});