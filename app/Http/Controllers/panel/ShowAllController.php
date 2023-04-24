<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Activite;
use App\Models\Akhbar;
use App\Models\article;
use App\Models\Contact;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\gender;
use App\Models\order;
use App\Models\Tourguide;
use App\Models\User;
use App\Models\vacation;

class ShowAllController extends Controller
{
    public function ShowallUser(){

        $users=User::query();
//
        if($keyword=request('search')){

            $users
                ->where('email','LIKE',"%{$keyword}%")
                ->orWhere('name','LIKE',"%{$keyword}%")
                ->orWhere('UserId',"%{$keyword}%");

        }
        $users=$users->latest()->paginate(20);

        return view('panel.user.Showall',['users'=>$users],['Status' => 0]);
    }
    public function ShowAllContact(){
        $contacts=Contact::all();
        return view('panel.contact.Showall',['contacts'=>$contacts],['Status' => 0]);
    }
    public function ShowAllAbout(){
        $abouts=About::all();
        return view('panel.about.Showall',['abouts'=>$abouts],['Status' => 0]);
    }
    public function ShowAllAkhbar(){
        $akhbars=Akhbar::all();
        return view('panel.Akhbar.Showall',['akhbars'=>$akhbars],['Status' => 0]);
    }
    public function ShowallArticle(){
        $articles=article::all();
        return view('panel.article.Showall',['articles'=>$articles],['Status' => 0]);
    }

    public function ShowallGender(){
        $genders=gender::all();
        return view('panel.gender.Showall',['genders'=>$genders]);
    }
    public function Showallorder(){
        $orders=order::all();
        return view('panel.order.Showall',['orders'=>$orders]);
    }
    public function Showalltoutguid(){
        $tourguides=Tourguide::all();
        return view('panel.tourguide.Showall',['tourguides'=>$tourguides]);
    }
    public function Showalltravel(){
        $travels=vacation::all();
        return view('panel.travel.Showall',['travels'=>$travels]);
    }
    public function ShowallAvtivite(){
        $activites=Activite::all();
        return view('panel.activites.Showall',['activites'=>$activites]);
    }
    public function ShowallEvent(){
        $events=Event::all();
        return view('panel.event.Showall',['events'=>$events]);
    }
    public function Showallgallery(){
        $galleries=Gallery::all();
        return view('panel.gallery.Showall',['galleries'=>$galleries]);
    }
}
