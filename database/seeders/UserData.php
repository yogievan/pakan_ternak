<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

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
                'email' => 'peternak@gmail.com',
                'role' => 'peternak',
                'password' => bcrypt('123'),
            ],
            [
                'name' =>'Pabrik Bang Jago',
                'email' => 'pabrik@gmail.com',
                'role' => 'pabrik',
                'password' => bcrypt('123'),
            ],
        ];
        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
