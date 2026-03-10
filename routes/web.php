<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;

// Route Mahasiswa (dari modul sebelumnya)
Route::resource('mahasiswa', MahasiswaController::class);

// Route Mata Kuliah (modul 2d)
Route::resource('matakuliah', MatakuliahController::class);