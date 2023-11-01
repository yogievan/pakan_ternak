<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\pabrikController;
use App\Http\Controllers\peternakController;
use Illuminate\Support\Facades\Route;

// login (Auth)
Route::middleware(['guest'])->group(function(){
    Route::get('/', [authController::class, 'login'])->name('login');
    Route::post('/', [authController::class, 'validateLogin']);
});

Route::middleware(['auth'])->group(function(){
    Route::middleware(['preventBackHistory'])->group(function(){
        // peternak
        Route::middleware('cekRole:peternak')->group(function () {
            Route::get('/dashboard/peternak', [peternakController::class, 'dashboard'])->name('dashboard_peternak');
            Route::get('/order/pakan', [peternakController::class, 'orderPakan'])->name('order_pakan');
            Route::get('/order/pakan-{id}', [peternakController::class, 'detailOrderPakan'])->name('detail_order');
            Route::get('/stok/pakan', [peternakController::class, 'stokPakan'])->name('stok_pakan');
            Route::get('/profile', [peternakController::class, 'profileUser'])->name('profile')->middleware('cekRole:peternak');
        });

        // pabrik
        Route::middleware('cekRole:pabrik')->group(function () {
            Route::get('/dashboard/pabrik', [pabrikController::class, 'dashboard'])->name('dashboard_pabrik');
            Route::get('/data/peternak', [pabrikController::class, 'dataPeternak'])->name('data_peternak');
            Route::get('/pakan/ternak',[pabrikController::class, 'dataPakanTernak'])->name('pakan_ternak');
            Route::get('/pakan/ternak/tambah',[pabrikController::class, 'tambahDataPakanTernak'])->name('addPakan');
            Route::post('/pakan/ternak/tambah/data',[pabrikController::class, 'tambahPakan'])->name('add_DataP');
        });

        // Logout
        Route::get('/logout',[authController::class, 'logout']);
    });
});