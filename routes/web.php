<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

Route::get('/', function () {
    return view('landpage');
});

// Auth
Route::get('/registrasi', [AuthController::class, 'tampilRegist'])->name('registrasi.tampil');
Route::post('/registrasi/submit', [AuthController::class, 'submitRegist'])->name('registrasi.submit');

