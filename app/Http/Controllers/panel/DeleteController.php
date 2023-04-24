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
use App\Models\tourguid;
use App\Models\Tourguide;
use App\Models\typeoftrip;
use App\Models\User;
use App\Models\vacation;

class DeleteController extends Controller
{
    public function DeleteUser($id)
    {
        $deleteusers = User::all()->where('UserId', $id)->firstOrFail();
        return view('panel.user.delete', ['user' => $deleteusers]);
    }

    public function DeleteUsers($id)
    {
        $deleteusers = User::all()->where('UserId', $id)->firstOrFail();
        $deleteusers->delete($deleteusers->UserId);
        return redirect('/admin/panel/user/showall.blade.php');
    }
    public function DeleteContact($id)
    {
        $deletecontacts = Contact::all()->where('id', $id)->firstOrFail();
        return view('panel.contact.delete', ['contact' => $deletecontacts]);
    }

    public function DeleteContacts($id)
    {
        $deletecontacts = Contact::all()->where('id', $id)->firstOrFail();
        $deletecontacts->delete($deletecontacts->id);
        return redirect('panel/contact/showall.blade.php');
    }
    public function DeleteAbout($id)
    {
        $deleteAbouts = About::all()->where('id', $id)->firstOrFail();
        return view('panel.about.delete', ['about' => $deleteAbouts]);
    }

    public function DeleteAbouts($id)
    {
        $deleteAbouts = About::all()->where('id', $id)->firstOrFail();
        $deleteAbouts->delete($deleteAbouts->id);
        return redirect('panel/about/showall.blade.php');
    }

    public function DeleteAkhbar($id)
    {
        $deleteAkhbar= Akhbar::all()->where('id', $id)->firstOrFail();
        return view('panel.Akhbar.delete', ['akhbar' => $deleteAkhbar]);
    }

    public function DeleteAkhbars($id)
    {
        $deleteAkhbar = Akhbar::all()->where('id', $id)->firstOrFail();
        $deleteAkhbar->delete($deleteAkhbar->id);
        return redirect('/admin/panel/akhbar/showall.blade.php');
    }
    public function DeleteArticle($id)
    {
        $deleteArticle = Article::all()->where('id', $id)->firstOrFail();
        return view('panel.article.delete', ['article' => $deleteArticle]);
    }

    public function DeleteArticles($id)
    {
        $deleteArticle = Article::all()->where('id', $id)->firstOrFail();
        $deleteArticle->delete($deleteArticle->ArticleId);
        return redirect('/admin/panel/article/showall.blade.php');
    }
    public function DeleteGender($id)
    {
        $deleteGender = Gender::all()->where('genderId', $id)->firstOrFail();
        return view('panel.gender.delete', ['gender' => $deleteGender]);
    }

    public function DeleteGenders($id)
    {
        $deleteGender = Gender::all()->where('genderId', $id)->firstOrFail();
        $deleteGender->delete($deleteGender->id);
        return redirect('/admin/panel/gender/showall.blade.php');
    }
    public function DeleteOrder($id)
    {
        $deleteorder=
        order::all()->where('id', $id)->firstOrFail();
        return view('panel.order.delete', ['order' => $deleteorder]);
    }

    public function DeleteOrders($id)
    {
        $deleteorder = order::all()->where('id', $id)->firstOrFail();
        $deleteorder->delete($deleteorder->id);
        return redirect('/admin/panel/order/showall.blade.php');
    }
    public function Deletetourguide($id)
    {
        $deletetourguide = Tourguide::all()->where('TourGuideId', $id)->firstOrFail();
        return view('panel.tourguide.delete', ['tourguide' => $deletetourguide]);
    }

    public function Deletetourguides($id)
    {
        $deletetourguide = Tourguide::all()->where('TourGuideId', $id)->firstOrFail();
        $deletetourguide->delete($deletetourguide->TourGuideId);
        return redirect('/admin/panel/tourguide/showall.blade.php');
    }
    public function Deletetravel($id)
    {
        $deletetravel = vacation::all()->where('TravelId', $id)->firstOrFail();
        return view('panel.travel.delete', ['travel' => $deletetravel]);
    }

    public function Deletetravels($id)
    {
        $deletetravel = vacation::all()->where('TravelId', $id)->firstOrFail();
        $deletetravel->delete($deletetravel->TravelId);
        return redirect('/admin/panel/travel/showall.blade.php');
    }
    public function Deleteactivite($id)
    {
        $deleteactivites = Activite::all()->where('id', $id)->firstOrFail();
        return view('panel.activites.delete', ['activite' => $deleteactivites]);
    }

    public function Deleteactivites($id)
    {
        $deleteactivites = Activite::all()->where('id', $id)->firstOrFail();
        $deleteactivites->delete($deleteactivites->id);
        return redirect('/admin/panel/activites/showall.blade.php');
    }
    public function Deleteevent($id)
    {
        $deleteevent = Event::all()->where('eventId', $id)->firstOrFail();
        return view('panel.event.delete', ['event' => $deleteevent]);
    }

    public function Deleteevents($id)
    {
        $deleteevent = Event::all()->where('eventId', $id)->firstOrFail();
        $deleteevent->delete($deleteevent->eventId);
        return redirect('/admin/panel/event/showall.blade.php');
    }
    public function Deletegallery($id)
    {
        $deletegallery = Gallery::all()->where('id', $id)->firstOrFail();
        return view('panel.gallery.delete', ['gallery' => $deletegallery]);
    }

    public function Deletegalleries($id)
    {
        $deletegallery = Gallery::all()->where('id', $id)->firstOrFail();
        $deletegallery->delete($deletegallery->id);
        return redirect('/admin/panel/gallery/showall.blade.php');
    }
}
