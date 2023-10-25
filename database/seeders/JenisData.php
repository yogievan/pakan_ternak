<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jenis;

class JenisData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jenisData =[
            [
                'jenis' =>'Ayam/Bebek',
            ],
            [
                'jenis' =>'Sapi',
            ],
            [
                'jenis' =>'Puyuh',
            ],
            [
                'jenis' =>'Kambing',
            ],
        ];
        foreach($jenisData as $key => $val){
            Jenis::create($val);
        }
    }
}
