<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\state;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function ListCity(){
      return view('new');
    }

    public function stateList(){
        $states='https://iran-locations-api.vercel.app/api/v1/states';
        return response()->json($states);
    }
}
