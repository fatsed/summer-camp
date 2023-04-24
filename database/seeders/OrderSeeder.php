<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=1; $i <11 ; $i++) {
            DB::table('orders')->insert([
                'id' => $i ,
                'UserId' => $i,
                'TravelId' => $i ,
                'genderName' => 'female',
                'price' => $i.'35435' ,
                'tracking_code' => 'dgffdgfdfgdgfgfggf'.$i,
                'created_at'=>'2023-02-14 12:18:03',
                'updated_at'=>'2023-02-14 12:18:03',
            ]);
        }
    }
}
