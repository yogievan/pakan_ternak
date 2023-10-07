<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{
    // view
    public function login(){
        return view('login');
    }

    // validate
    public function validateLogin(Request $request){
        // validate
        $request -> validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        // validate input request
        $datalogin = [
            'email' => $request -> email,
            'password' => $request -> password,
        ];
        if(Auth::attempt($datalogin)){
            //hak akses
            if(Auth::user()->role == 'peternak'){
                return redirect('/dashboard/peternak');
            } 
            elseif(Auth::user()->role == 'pabrik'){
                return redirect('/dashboard/pabrik');
            }
        }
        else{
            return redirect('/')->withErrors('Email atau Password tidak sesuai!')->withInput();
        }
    }

    // logout
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
