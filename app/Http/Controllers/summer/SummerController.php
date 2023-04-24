<?php

namespace App\Http\Controllers\summer;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Activite;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\Tourguide;
use App\Models\vacation;
use Illuminate\Http\Request;

class SummerController extends Controller
{
    public function Vacation(){
        $travels=vacation::all();
        return view('layouts.pages.travel',['travels'=>$travels]);
    }
    public function Gallery(){
        $galleries=Gallery::all();
        return view('layouts.pages.gallery',['galleries'=>$galleries]);
    }
    public function TourGuide(){
        $tourGuides=Tourguide::all();
        return view('layouts.pages.tourguide',['tourguides'=>$tourGuides]);
    }
    public function Event(){
        $events=Event::all();
        return view('layouts.pages.event',['events'=>$events]);
    }
    public function AboutUs(){
            $abouts=About::all();
            return view('layouts.pages.about',['abouts'=>$abouts],['Status' => 0]);
    }
    public function Activite(){
        $activites=Activite::all();
        return view('layouts.pages.activites',['activites'=>$activites]);
    }
}
