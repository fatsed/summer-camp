<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Trait\MyTrait;
use App\Models\About;
use App\Models\Activite;
use App\Models\Akhbar;
use App\Models\Article;
use App\Models\Contact;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\Tourguide;
use App\Models\vacation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    use MyTrait;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $this->Sum();
        $tourGuides=Tourguide::all();
        $events=Event::all();
        $activites=Activite::all();
        $travels=vacation::all();
        $akhbars=Akhbar::all();
        $articles=article::all();
        $galleries=Gallery::all();
        $abouts=About::all();
        return view('layouts.index',['tourguides'=>$tourGuides,'events'=>$events,
            'activites'=>$activites,'travels'=>$travels ,'tourGuides'=>$tourGuides, 'articles'=>$articles,
            'akhbars'=>$akhbars,'galleries'=>$galleries,'abouts'=>$abouts]);

    }
    public function Admin(){
        return view('admin.admin');
    }
    public function Contact()
    {
        return view('layouts.pages.contactUs', ['Status' => 0]);
    }

//    public function AddContact()
//    {
//        $tourGuides=Tourguide::all();
//        $events=Event::all();
//        $activites=Activite::all();
//        $travels=vacation::all();
//        $akhbars=Akhbar::all();
//        $articles=article::all();
//        $galleries=Gallery::all();
//        $abouts=About::all();
//        $validation =Validator::make(request()->all(), [
//            'Name' => ['required','string', 'max:255'],
//            'email' => ['required', 'string', 'email', 'max:255'],
//            'subject' => ['required','max:30'],
//            'message' => ['required','string', 'max:255'],
//        ])
//            ->validate();
//        Contact::create([
//            'Name' => request('Name'),
//            'email' => request('email'),
//            'subject' => request('subject'),
//            'message' => request('message'),
//        ]);
//        return view('layouts.index',['tourguides'=>$tourGuides,'events'=>$events,
//            'activites'=>$activites,'travels'=>$travels ,'tourGuides'=>$tourGuides, 'articles'=>$articles,
//            'akhbars'=>$akhbars,'galleries'=>$galleries,'abouts'=>$abouts]);
//    }

}
