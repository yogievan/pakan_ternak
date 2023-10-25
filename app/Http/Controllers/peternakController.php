<?php

namespace App\Http\Controllers;

use App\Models\Pakan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class peternakController extends Controller
{
    // view
    public function dashboard(){
        return view('peternak.dashboard');
    }
    public function orderPakan(){
        $name = Auth::user();
        $pakans = Pakan::all();
        return view('peternak.orderPakan', 
        ['name' => $name, 
        'pakans' => $pakans,
        ]);
    }
    public function stokPakan(){
        return view('peternak.stokPakan');
    }
    // open profile
    public function profileUser(){
        $name = Auth::user()->name;
        $role = Auth::user()->role;
        $email = Auth::user()->email;
        $alamat = Auth::user()->alamat;

        return view('peternak.profile',
    [
        'name' => $name,
        'role' => $role,
        'email' => $email,
        'alamat' => $alamat,
    ]);
    }


    // Order Pakan
    public function detailOrderPakan($id){
        $pakans = Pakan::find($id);
        $name = Auth::user()->name;
        $id_user = Auth::user()->id;
        return view('peternak.detailOrderPakan',
        ['pakans' => $pakans,
        'name'=>$name,
        'id_user'=>$id_user,
        ]);
    }
}
