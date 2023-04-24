<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=1; $i <11 ; $i++) {
            DB::table('articles')->insert([
                'id' => $i+2 ,
                'ArticlePicture' => 'dfhjksdfhjkdsf.png'.$i,
                 'title' =>'article'. $i ,
                'abstract' =>'fggdfgughidfghjfdvgfgghfd'. $i,
                'text' =>'fdgfdgfgedfgfd gfhrtyhgfhgfhghfghrfhghfhg'. $i ,
                'time' =>$i .'3443',
                'writer' =>'fdf'. $i ,
                'source' => 'fgfgfgfdgfg'.$i,
                'created_at'=>'2023-02-14 12:18:03',
                'updated_at'=>'2023-02-14 12:18:03',
            ]);
        }
    }
}
