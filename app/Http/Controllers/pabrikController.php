<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pabrikController extends Controller
{
    // view
    public function dashboard(){
        return view('pabrik.dashboard');
    }
    public function dataPeternak(){
        return view('pabrik.dataPeternak');
    }
}
