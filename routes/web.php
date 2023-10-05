<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/dashboard/peternak', function () {
    return view('peternak.dashboard');
});
