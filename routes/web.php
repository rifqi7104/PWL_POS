<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'index']);

Route::get('/level', [LevelController::class, 'index']);
Route::get('/kategori', [KategoriController::class, 'index']);

Route::get('/user', [UserController::class, 'index'])->name('user_index');
Route::get('/user/tambah', [UserController::class, 'tambah'])->name('user_tambah');
Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan'])->name('user_tambah_simpan');
Route::get('/user/ubah/{id}', [UserController::class, 'ubah'])->name('user_ubah');
Route::put('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan'])->name('user_ubah_simpan');
Route::get('/user/hapus{id}', [UserController::class, 'hapus'])->name('user_hapus');


// Route::get('/user/{id}/name/{name}', [UserController::class, 'user']);

Route::prefix('category')->group(function () {
    Route::get('/food-beverage', [CategoryController::class, 'foodBeverage']);
    Route::get('/beauty-health', [CategoryController::class, 'beautyHealth']);
    Route::get('/home-care', [CategoryController::class, 'homeCare']);
    Route::get('/baby-kid', [CategoryController::class, 'babyKid']);
    });

Route::get('/sales', [SalesController::class, 'sales']);

