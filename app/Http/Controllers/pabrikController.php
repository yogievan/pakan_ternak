<?php

namespace App\Http\Controllers;

use App\Models\Jenis;
use App\Models\Pakan;
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
    public function dataPakanTernak(){
        $pakans = Pakan::all();
        return view('pabrik.dataPakanTernak',
        [
            'pakans' => $pakans,
        ]);
    }
    public function tambahDataPakanTernak(){
        $jenis = Jenis::all();
        return view('pabrik.tambahPakan',
        [
            'jenis' => $jenis,
        ]);
    }

    // tambah pakan
    public function tambahPakan(Request $request){
        Pakan::create([
            'nama_pakan' => $request -> nama_pakan,
            'harga' => $request -> harga,
            'berat_kg' => $request -> berat_kg,
            'jenis_id' => $request -> jenis_id,
        ]);
        return redirect('/pakan/ternak');
    }
}
