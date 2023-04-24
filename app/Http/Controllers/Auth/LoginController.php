<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Trait\MyTrait;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
//    public function login(Request $request){
//        $input=$request->all();
//        $this->validate($request,[
//            'email'=>'required|email',
//            'password'=>'required'
//            ]);
//        if (auth()->attempt(['email'=>$input['email'],'password'=>$input['password']])){
//            if(auth()->user()->role =="admin"){
//                return redirect()->route('homeAdmin');
//            }
//            if(auth()->user()->role =="editor"){
//                return redirect();
//            }
//            else{
//                return redirect()->route('home');
//            }
//        }
//        else{
//            return redirect()->route('login')
//                ->with('error','Incorrect email or password');
//        }
//    }

}
