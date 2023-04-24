<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TourGuideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=1; $i <11 ; $i++) {
            DB::table('tourguides')->insert([
                'TourGuideId' => $i ,
                'TourGuideName' =>'dfdff'. $i,
                'TourGuideFamily' => 'fdfgfgf'.$i ,
                'TourGuideImg' =>'fghdfghghgh.png'.$i,
                'TourGuideAddress' =>'gfdgfdgdfgggfdg'. $i ,
                'TourGuideEmail' =>'gfgfgfgh@gmail.com'. $i,
                'genderName' => 'female' ,
                'TourGuideAge' => $i,
                'created_at'=>'2023-02-14 12:18:03',
                'updated_at'=>'2023-02-14 12:18:03',
            ]);
        }
    }
}
