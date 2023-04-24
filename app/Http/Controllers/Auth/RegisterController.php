<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;


class RegisterController extends Controller
{

    use RegistersUsers;
    protected $redirectTo = "/";

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data): \Illuminate\Contracts\Validation\Validator
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'family'=>['required', ' string', 'max:255'],
            'picture'=>['required'],
            'address' => ['required', ' string', 'min:20'],
            'age' => ['required', ' integer', 'max:100'],
            'phone'=>['required', ' string', 'max:11', 'min:9'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function create(array $data)
    {

        if(isset($data['picture'])){
            $random = rand(1000000000, 9999999999);
            $picture = $data['picture'];
            $picture->move(public_path('/uploads/images'), $random);
            $picture_address = '/uploads/images/'.$random;
        }



        return User::create([
            'name' => $data['name'],
            'family' => $data['family'],
            'picture' => $picture_address,
            'address' => $data['address'],
            'age' => $data['age'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'password' =>Hash::make($data['password'])
        ]);


    }
}
