<?php

use App\Http\Controllers\LatihanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('greeting', [LatihanController::class, 'greeting']);
Route::get('Penjumlahan', [LatihanController::class, 'Penjumlahan'])->name('Penjumlahan');
Route::post('action-Penjumlahan', [LatihanController::class, 'actionPenjumlahan'])->name('action-Penjumlahan');
Route::get('Pengurangan', [LatihanController::class, 'Pengurangan'])->name('Pengurangan');
Route::post('action-Pengurangan', [LatihanController::class, 'actionPengurangan'])->name('action-Pengurangan');
Route::get('Pembagian', [LatihanController::class, 'Pembagian'])->name('Pembagian');
Route::post('action-Pembagian', [LatihanController::class, 'actionPembagian'])->name('action-Pembagian');
Route::get('Perkalian', [LatihanController::class, 'Perkalian'])->name('Perkalian');
Route::post('action-Perkalian', [LatihanController::class, 'actionPerkalian'])->name('action-Perkalian');

Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('action-login', [LoginController::class, 'actionLogin'])->name('action-login');

Route::middleware('auth')->group(function () {
    // resource : get, post, put, delete
    Route::resource('user', UserController::class);
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
});


