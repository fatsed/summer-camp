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
use App\Models\Response;
use App\Models\Tourguide;
use App\Models\User;
use App\Models\vacation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

/**
 * @method alert()
 */
class CreateController extends Controller
{

    public function User()
    {
        return view('panel.user.create', ['Status' => 0]);
    }

    public function AddUser(Request $request)
    {
        $validation =Validator::make(request()->all(), [
            'name' => ['required','string', 'max:255'],
            'family' => ['required','string', 'max:255'],
            'genderName' => 'required',
            'picture' => ['required'],
            'address' => ['required','string'],
            'age' => 'required', ' integer', 'max:100',
            'phone' => ['required', ' string', 'max:11', 'min:9'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ])
            ->validate();
        if(isset($request['picture'])){
            $random = rand(1000000000, 9999999999);
            $picture = $request['picture'];
            $picture->move(public_path('/uploads/images'), $random);
            $picture_Address = '/uploads/images/'.$random;
        }
        User::create([
            'name' => request('name'),
            'family' => request('family'),
            'genderName' => request('genderName'),
            'picture' => $picture_Address,
            'address' => request('address'),
            'age' => request('age'),
            'phone' => request('phone'),
            'email' => request('email'),
            'password' => request('password'),
            'IsActive' =>0,
        ]);
        return redirect()->back()->with('swal-success','Your user has been successfully registered');
    }

    public function Contact()
    {
        return view('panel.contact.create', ['Status' => 0]);
    }

    public function AddContact()
    {
        $validation =Validator::make(request()->all(), [
            'Name' => ['required','string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'subject' => ['required','max:30'],
            'message' => ['required','string', 'max:255'],
        ])
            ->validate();
        Contact::create([
            'id' => request('Name'),
            'email' => request('email'),
            'subject' => request('subject'),
            'message' => request('message'),
        ]);
        return redirect()->back()->with('swal-success','Your contact has been successfully registered');
    }

    public function AddResponse()
    {
        $validation =Validator::make(request()->all(), [
            'idContact' => 'required',
            'response' => 'required',
            'name' => 'required',
        ])
            ->validate();
        Response::create([
            'idContact' => request('idContact'),
            'response' => request('response'),
            'name' => request('name'),
        ]);
        return redirect()->back()->with('swal-success','Your response has been successfully registered');
    }
    public function About()
    {
        return view('panel.about.create', ['Status' => 0]);
    }

    public function AddAbout(Request $request)
    {
        $validation =Validator::make(request()->all(), [
            'Name' => ['required','string', 'max:255'],
            'address' => ['required','string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'numberUs'=>['required', ' string', 'max:11', 'min:9'],
            'text' => ['required','text'],
            'picture' => ['required'],
        ])
            ->validate();
        if(isset($request['picture'])){
            $random = rand(1000000000, 9999999999);
            $picture = $request['picture'];
            $picture->move(public_path('/uploads/abouts'), $random);
            $picture_Address = '/uploads/abouts/'.$random;
        }
        About::create([
            'Name' => request('Name'),
            'address' => request('address'),
            'email' => request('email'),
            'numberUs' => request('numberUs'),
            'text' => request('text'),
            'picture' =>$picture_Address,
        ]);
        return redirect()->back()->with('swal-success','Your about us has been successfully registered');
    }
    public function Akhbar()
    {
        return view('panel.Akhbar.create', ['Status' => 0]);
    }

    public function AddAkhbar(Request $request)
    {
        $validation =Validator::make(request()->all(), [
            'Title' => ['required','string', 'max:50','min:3'],
            'UploadTime' => 'required',
            'Reference' => ['required', 'string','min:3', 'max:255'],
            'img'=>['required'],
            'writer'=>['required','string', 'max:40'],
        ])
            ->validate();
        if(isset($request['img'])){
            $random = rand(1000000000, 9999999999);
            $picture = $request['img'];
            $picture->move(public_path('/uploads/news'), $random);
            $picture_Address = '/uploads/news/'.$random;
        }
        Akhbar::create([
            'Title' => request('Title'),
            'UploadTime' => request('UploadTime'),
            'Reference' => request('Reference'),
            'img' => $picture_Address,
            'writer' => request('writer'),
        ]);
        return redirect()->back()->with('swal-success','Your new has been successfully registered');
    }
    public function Article()
    {
        return view('panel.article.create', ['Status' => 0]);
    }

    public function AddArticle(Request $request)
    {
        $validation =Validator::make(request()->all(), [
            'ArticlePicture' => ['required'],
            'title' => ['required','string', 'max:50','min:3'],
            'abstract' => ['required','string', 'max:100','min:3'],
            'text' => ['required','string', 'max:225','min:10'],
            'time' => 'required',
            'writer' => ['required','string', 'max:40'],
            'source' => ['required', 'string','min:3', 'max:255'],
        ])
            ->validate();
        if(isset($request['ArticlePicture'])){
            $random = rand(1000000000, 9999999999);
            $picture = $request['ArticlePicture'];
            $picture->move(public_path('/uploads/article'), $random);
            $picture_Address = '/uploads/article/'.$random;
        }
        Article::create([
            'ArticlePicture' => $picture_Address,
            'title' => request('title'),
            'abstract' => request('abstract'),
            'text' => request('text'),
            'time' => request('time'),
            'writer' => request('writer'),
            'source' => request('source'),
        ]);
        return redirect()->back()->with('swal-success','Your article has been successfully registered');
    }

    public function Gender(){
        return view('panel.gender.create', ['Status' => 0]);
    }
    public function AddGender(){
        $validation=Validator::make(request()->all(),[
            'genderName'=>'required',

        ]);
       if ($validation->fails()) {
           return redirect()
               ->back()
               ->withErrors($validation);
       }
        gender::create([
            'genderName'=>request('genderName'),
        ]);
        return redirect()->back()->with('swal-success','Your gender has been successfully registered');
    }
    public function Order(){
        return view('panel.order.create', ['Status' => 0]);
    }
    public function AddOrder(){
        $validation=Validator::make(request()->all(),[
            'UserId'=>'required',
            'TravelId'=>'required',
            'genderName'=>'required',
            'price'=>'required',
            'tracking_code'=>'required',
        ])
            ->validate();
        Order::create([
            'UserId'=>request('UserId'),
            'TravelId'=>request('TravelId'),
            'genderName'=>request('genderName'),
            'price'=>request('price'),
            'tracking_code'=>request('tracking_code'),
        ]);
        return redirect()->back()->with('swal-success','Your order has been successfully registered');
    }
    public function Tourguid(){
        return view('panel.tourguide.create', ['Status' => 0]);
    }
    public function AddTourguid(Request $request){
        $validation=Validator::make(request()->all(),[
            'TourGuideName'=>'required',
            'TourGuideFamily'=>'required',
            'TourGuideImg'=>'required',
            'TourGuideAddress'=>'required',
            'TourGuideEmail'=>'required',
            'genderName'=>'required',
            'TourGuideAge'=>'required',

        ])->validate();
        if(isset($request['TourGuideImg'])){
            $random = rand(1000000000, 9999999999);
            $picture = $request['TourGuideImg'];
            $picture->move(public_path('/uploads/tour_guide'), $random);
            $picture_Address = '/uploads/tour_guide/'.$random;
        }
        Tourguide::create([
            'TourGuideName'=>request('TourGuideName'),
            'TourGuideFamily'=>request('TourGuideFamily'),
            'TourGuideImg'=>$picture_Address,
            'TourGuideAddress'=>request('TourGuideAddress'),
            'TourGuideEmail'=>request('TourGuideEmail'),
            'genderName'=>request('genderName'),
            'TourGuideAge'=>request('TourGuideAge'),
        ]);
        return redirect()->back()->with('swal-success','Your tourGuide has been successfully registered');
    }
    public function Travel(){
        return view('panel.travel.create', ['Status' => 0]);
    }
    public function ADDtravel(Request $request){
        $validation=Validator::make(request()->all(),[
            'UserId'=>'required',
            'TravelAddress'=>['required', ' string', 'min:5'],
            'price'=>['required', 'string'],
            'discount_trip'=>['required', ' integer', 'min:1'],
            'it_takes_day'=>['required', ' integer', 'min:1'],
            'departure_date'=>['required', ' date'],
            'TravelPicture'=>['required']
        ])->validate();
        if(isset($request['TravelPicture'])){
            $random = rand(1000000000, 9999999999);
            $picture = $request['TravelPicture'];
            $picture->move(public_path('/uploads/travels'), $random);
            $picture_Address = '/uploads/travels/'.$random;
        }
        vacation::create([
            'UserId'=>request('UserId'),
            'TravelAddress'=>request('TravelAddress'),
            'price'=>request('price'),
            'discount_trip'=>request('discount_trip'),
            'it_takes_day'=>request('it_takes_day'),
            'departure_date'=>request('departure_date'),
            'TravelPicture'=>$picture_Address,
        ]);
        return redirect()->back()->with('swal-success','Your travel has been successfully registered');
    }
    public function Activite(){
        return view('panel.activites.create', ['Status' => 0]);
    }
    public function ADDActivite(Request $request){
        $validation=\Illuminate\Support\Facades\Validator::make(request()->all(),[
            'text' => ['required','string', 'max:255','min:3'],
            'picture' => ['required'],
        ])->validate();
        if(isset($request['picture'])){
            $random = rand(1000000000, 9999999999);
            $picture = $request['picture'];
            $picture->move(public_path('/uploads/activities'), $random);
            $picture_Address = '/uploads/activities/'.$random;
        }
        Activite::create([
            'text'=>request('text'),
            'picture'=>$picture_Address,
        ]);
        return redirect()->back()->with('swal-success','Your activite has been successfully registered');
    }
    public function Event(){
        return view('panel.event.create', ['Status' => 0]);
    }
    public function ADDEvent(Request $request){
        $validation=\Illuminate\Support\Facades\Validator::make(request()->all(),[
            'picture' => ['required'],
            'title' => ['required','string', 'max:50','min:3'],
            'price' => ['required','string'],
            'text' => ['required','string', 'max:255','min:3'],

        ])->validate();
        if(isset($request['picture'])){
            $random = rand(1000000000, 9999999999);
            $picture = $request['picture'];
            $picture->move(public_path('/uploads/event'), $random);
            $picture_Address = '/uploads/event/'.$random;
        }
        Event::create([
            'picture'=>$picture_Address,
            'title'=>request('title'),
            'price'=>request('price'),
            'text'=>request('text'),
        ]);
        return redirect()->back()->with('swal-success','Your event has been successfully registered');
    }
    public function Gallery(){
        return view('panel.gallery.create', ['Status' => 0]);
    }
    public function ADDGallery(Request $request){
        $validation=\Illuminate\Support\Facades\Validator::make(request()->all(),[
            'name' => ['required','string', 'max:255'],
            'picture' => ['required'],

        ])->validate();
        if(isset($request['picture'])){
            $random = rand(1000000000, 9999999999);
            $picture = $request['picture'];
            $picture->move(public_path('/uploads/gallery'), $random);
            $picture_Address = '/uploads/gallery/'.$random;
        }
        Gallery::create([
            'name'=>request('name'),
            'picture'=>$picture_Address,
        ]);
        return redirect()->back()->with('swal-success','Your gallery has been successfully registered');
    }



}
