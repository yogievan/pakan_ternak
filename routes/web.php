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
    // peternak
    Route::get('/dashboard/peternak', [peternakController::class, 'dashboard'])->name('dashboard_peternak')->middleware('cekRole:peternak');
    Route::get('/order/pakan', [peternakController::class, 'orderPakan'])->name('order_pakan')->middleware('cekRole:peternak');
    Route::get('/order/pakan-{id}', [peternakController::class, 'detailOrderPakan'])->name('detail_order')->middleware('cekRole:peternak');
    Route::get('/stok/pakan', [peternakController::class, 'stokPakan'])->name('stok_pakan')->middleware('cekRole:peternak');
    
    // profile user peternak
    Route::get('/profile', [peternakController::class, 'profileUser'])->name('profile')->middleware('cekRole:peternak');
    
    // pabrik
    Route::get('/dashboard/pabrik', [pabrikController::class, 'dashboard'])->name('dashboard_pabrik')->middleware('cekRole:pabrik');
    Route::get('/data/peternak', [pabrikController::class, 'dataPeternak'])->name('data_peternak')->middleware('cekRole:pabrik');

    // Logout
    Route::get('/logout',[authController::class, 'logout']);
});