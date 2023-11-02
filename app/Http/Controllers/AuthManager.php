<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthManager extends Controller
{
    public function index()
    {
        if($user = Auth::user()) {
            return view('home', compact('user'));
        } else {
            return view('auth/login');
        }
    }

    public function login(Request $request) 
    {

        $user = Auth::user();

        if(!$user)
        {
            return view('auth/login', compact('user'));
        }

           return view('home', compact('user'));
        }
    

    public function loginPost(Request $request)
    {
        $request->validate([
            'email'=> 'required',
            'password'=> 'required',
        ]);

        $credentials = $request->only('email','password');
        if(Auth::attempt($credentials)) {  
            return redirect()->intended(route('home'));
        }
        return view('auth/login');#redirect(route('auth/login'))->with("error", "Login details are not valid");
        
    }
}
