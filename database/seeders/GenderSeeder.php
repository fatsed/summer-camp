<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=1; $i <11 ; $i++) {
            DB::table('genders')->insert([
                'genderId' => $i ,
                'genderName' => 'female',
                'created_at'=>'2023-02-14 12:18:03',
                'updated_at'=>'2023-02-14 12:18:03',
            ]);
        }
    }
}
