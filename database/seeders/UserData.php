<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\table;

class UserData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData =[
            [
                'name' =>'Peternak Handal',
                'email' => 'peternak_ayambebek@gmail.com',
                'role' => 'peternak',
                'alamat' => 'Jalan Menuju Kesuksesan',
                'peternak' => '1',
                'password' => bcrypt('123'),
            ],
            [
                'name' =>'Pabrik Bang Jago',
                'email' => 'pabrik@gmail.com',
                'role' => 'pabrik',
                'alamat' => 'Jalan Jalan Aja',
                'peternak' => '',
                'password' => bcrypt('123'),
            ],
        ];
        // foreach($userData as $key => $val){
        //     User::create($val);
        // }
        foreach($userData as $val){
            DB::table('users')->insert($val);
        }
    }
}
