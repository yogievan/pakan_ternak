<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class peternakController extends Controller
{
    // view
    public function dashboard(){
        return view('peternak.dashboard');
    }
    public function formOrderPakan(){
        $name = Auth::user()->name;
        return view('peternak.formOrderPakan', ['name' => $name]);
    }
    public function dataPeternak(){
        return view('peternak.dataPeternak');
    }
    public function stokPakan(){
        return view('peternak.stokPakan');
    }
    
}
