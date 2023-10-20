<?php

namespace App\Http\Controllers;

use App\Models\Pakan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class peternakController extends Controller
{
    // view
    public function dashboard(){
        return view('peternak.dashboard');
    }
    public function orderPakan(){
        $name = Auth::user()->name;
        $pakans = Pakan::all();
        return view('peternak.orderPakan', 
        ['name' => $name, 
        'pakans' => $pakans,
        ]);
    }
    public function stokPakan(){
        return view('peternak.stokPakan');
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
