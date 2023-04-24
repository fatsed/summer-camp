<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=1; $i <8 ; $i++) {
            DB::table('users')->insert([
                'UserId' => $i ,
                'name' => 'fggf'.$i,
                'family' =>  'fggf'.$i ,
                'genderName' => 'female',
                'picture' => 'dfhjksdfhjkdsf.png'.$i ,
                'address' => 'bfhgjlfghklfghnfdghjfdghfdg',
                'age' => $i+12 ,
                'phone' => 'fbcvdfv'.$i,
                'email' => 'gfgfgfgh@gmail.com'.$i,
                'password' => 'hjkdvvfgdh12',
                'IsActive' => true ,
                'created_at'=>'2023-02-14 12:18:03',
                'updated_at'=>'2023-02-14 12:18:03',
            ]);
        }
    }
}
