<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Activite;
use App\Models\Akhbar;
use App\Models\article;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\gender;
use App\Models\order;
use App\Models\Tourguide;
use App\Models\User;
use App\Models\vacation;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function Edituser($id,User $user)
    {
        $user = User::all()->where('UserId', $id)->firstOrFail();
        if (Gate::allows('edit',$user)){
            return view('panel.user.edit', ['user' => $user]);
        }
        abort(403);
    }

    public function Editusers($id,Request $request)
    {
        $user = User::all()->where('UserId', $id)->firstOrFail();
        if(isset($request['picture'])){
            $random = rand(1000000000, 9999999999);
            $picture = $request['picture'];
            $picture->move(public_path('/uploads/images'), $random);
            $picture_Address = '/uploads/images/'.$random;
        }
        $user->update([
            'name' => request('name'),
            'family' => request('family'),
            'genderName' => request('genderName'),
            'picture' => $picture_Address,
            'address' => request('address'),
            'age' => request('age'),
            'phone' => request('phone'),
            'email' => request('email'),
            'password' => request('password'),
            'IsActive' => '0'
        ]);
        return redirect('/admin/panel/user/showall.blade.php');
    }
    public function EditAbout($id)
    {
        $about = About::all()->where('id', $id)->firstOrFail();
        return view('panel.about.edit', ['about' => $about]);
    }

    public function EditAbouts($id,Request $request)
    {
        $about = About::all()->where('id', $id)->firstOrFail();
        if(isset($request['picture'])){
            $random = rand(1000000000, 9999999999);
            $picture = $request['picture'];
            $picture->move(public_path('/uploads/abouts'), $random);
            $picture_Address = '/uploads/abouts/'.$random;
        }
        $about->update([
            'Name' => request('Name'),
            'email' => request('email'),
            'subject' => request('subject'),
            'message' => request('message'),
            'picture' =>$picture_Address,
        ]);
        return redirect('/admin/panel/about/showall.blade.php');
    }

    public function EditAkhbar($id)
    {
        $akhbar = Akhbar::all()->where('id', $id)->firstOrFail();
        return view('panel.Akhbar.edit', ['akhbar' => $akhbar]);
    }

    public function EditAkhbars($id,Request $request)
    {
        $akhbar = Akhbar::all()->where('id', $id)->firstOrFail();
        if(isset($request['img'])){
            $random = rand(1000000000, 9999999999);
            $picture = $request['img'];
            $picture->move(public_path('/uploads/news'), $random);
            $picture_Address = '/uploads/news/'.$random;
        }
        $akhbar->update([
            'Title'=>request('Title'),
            'UploadTime'=>request('UploadTime'),
            'Reference'=>request('Reference'),
            'img' => $picture_Address,
            'writer' => request('writer'),
        ]);
        return redirect('/admin/panel/akhbar/showall.blade.php');
    }
    public function EditArticle($id)
    {
        $article = Article::all()->where('id', $id)->firstOrFail();
        return view('panel.article.edit', ['article' => $article]);
    }

    public function EditArticles($id,Request $request)
    {
        $article = Article::all()->where('id', $id)->firstOrFail();
        if(isset($request['ArticlePicture'])){
            $random = rand(1000000000, 9999999999);
            $picture = $request['ArticlePicture'];
            $picture->move(public_path('/uploads/article'), $random);
            $picture_Address = '/uploads/article/'.$random;
        }
        $article->update([
            'ArticlePicture'=>$picture_Address,
            'title'=>request('title'),
            'abstract'=>request('abstract'),
            'text'=>request('text'),
            'time'=>request('time'),
            'writer'=>request('writer'),
            'source'=>request('source'),
        ]);
        return redirect('/admin/panel/article/showall.blade.php');
    }
    public function EditGender($id)
    {
        $gender = Gender::all()->where('genderId', $id)->firstOrFail();
        return view('panel.gender.edit', ['gender' => $gender]);
    }

    public function EditGenders($id)
    {
        $gender = Gender::all()->where('genderId', $id)->firstOrFail();
        $gender->update([
            'genderName'=>request('genderName'),
        ]);
        return redirect('/admin/panel/gender/showall.blade.php');
    }
    public function Editorder($id)
    {
        $order = Order::all()->where('id', $id)->firstOrFail();
        return view('panel.order.edit', ['order' => $order]);
    }

    public function Editorders($id)
    {
        $order = Order::all()->where('id', $id)->firstOrFail();
        $order->update([
            'UserId'=>request('UserId'),
            'TravelId'=>request('TravelId'),
            'genderName'=>request('genderName'),
            'price'=>request('price'),
            'tracking_code'=>request('tracking_code'),
        ]);
        return redirect('/admin/panel/order/showall.blade.php');
    }

    public function Edittourguide($id)
    {
        $tourguide = Tourguide::all()->where('TourGuideId', $id)->firstOrFail();
        return view('panel.tourguide.edit', ['tourguide' => $tourguide]);
    }

    public function Edittourguides($id ,Request $request)
    {
        $tourguide = Tourguide::all()->where('TourGuideId', $id)->firstOrFail();
        if(isset($request['TourGuideImg'])){
            $random = rand(1000000000, 9999999999);
            $picture = $request['TourGuideImg'];
            $picture->move(public_path('/uploads/tour_guide'), $random);
            $picture_Address = '/uploads/tour_guide/'.$random;
        }
        $tourguide->update([
            'TourGuideName'=>request('TourGuideName'),
            'TourGuideFamily'=>request('TourGuideFamily'),
            'TourGuideImg'=>$picture_Address,
            'TourGuideAddress'=>request('TourGuideAddress'),
            'TourGuideEmail'=>request('TourGuideEmail'),
            'genderName'=>request('genderName'),
            'TourGuideAge'=>request('TourGuideAge'),
        ]);
        return redirect('/admin/panel/tourguide/showall.blade.php');
    }

    public function Edittrsvel($id)
    {
        $travel = vacation::all()->where('TravelId', $id)->firstOrFail();
        return view('panel.travel.edit', ['travel' => $travel]);
    }

    public function Edittravels($id,Request $request)
    {
        $travel = vacation::all()->where('TravelId', $id)->firstOrFail();
        if(isset($request['TravelPicture'])){
            $random = rand(1000000000, 9999999999);
            $picture = $request['TravelPicture'];
            $picture->move(public_path('/uploads/travels'), $random);
            $picture_Address = '/uploads/travels/'.$random;
        }
        $travel->update([
            'UserId'=>request('UserId'),
            'TravelAddress'=>request('TravelAddress'),
            'price'=>request('price'),
            'discount_trip'=>request('discount_trip'),
            'it_takes_day'=>request('it_takes_day'),
            'departure_date'=>request('departure_date'),
            'TravelPicture'=>$picture_Address,
        ]);
        return redirect('/admin/panel/travel/showall.blade.php');
    }
    public function Editactivite($id)
    {
        $activite = Activite::all()->where('id', $id)->firstOrFail();
        return view('panel.activites.edit', ['activite' => $activite]);
    }

    public function Editactivites($id,Request $request)
    {
        $activite = Activite::all()->where('id', $id)->firstOrFail();
        if(isset($request['picture'])){
            $random = rand(1000000000, 9999999999);
            $picture = $request['picture'];
            $picture->move(public_path('/uploads/activities'), $random);
            $picture_Address = '/uploads/activities/'.$random;
        }
        $activite->update([
            'text'=>request('text'),
            'picture'=>$picture_Address,
        ]);
        return redirect('/admin/panel/activites/showall.blade.php');
    }
    public function EditEvent($id)
    {
        $event = Event::all()->where('eventId', $id)->firstOrFail();
        return view('panel.event.edit', ['event' => $event]);
    }

    public function EditEvents($id,Request $request)
    {
        $event = Event::all()->where('eventId', $id)->firstOrFail();
        if(isset($request['picture'])){
            $random = rand(1000000000, 9999999999);
            $picture = $request['picture'];
            $picture->move(public_path('/uploads/event'), $random);
            $picture_Address = '/uploads/event/'.$random;
        }
        $event->update([
            'picture'=>$picture_Address,
            'title'=>request('title'),
            'price'=>request('price'),
            'text'=>request('text'),
        ]);
        return redirect('/admin/panel/event/showall.blade.php');
    }
    public function Editgallery($id)
    {
        $gallery= Gallery::all()->where('id', $id)->firstOrFail();
        return view('panel.gallery.edit', ['gallery' => $gallery]);
    }

    public function Editgalleries($id,Request $request)
    {
        $gallery = Gallery::all()->where('id', $id)->firstOrFail();
        if(isset($request['picture'])){
            $random = rand(1000000000, 9999999999);
            $picture = $request['picture'];
            $picture->move(public_path('/uploads/gallery'), $random);
            $picture_Address = '/uploads/gallery/'.$random;
        }
        $gallery->update([
            'name'=>request('name'),
            'picture'=>$picture_Address,
        ]);
        return redirect('/admin/panel/gallery/showall.blade.php');
    }
}
