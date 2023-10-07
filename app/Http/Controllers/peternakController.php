<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class peternakController extends Controller
{
    // view
    public function dashboard(){
        return view('peternak.dashboard');
    }
}
