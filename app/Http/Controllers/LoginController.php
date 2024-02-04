<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function login(){
        return view('login', [
            'title' => 'Login'
        ]);
    }
    public function submitLogin(Request $request){
        $data = $request->validate([
                'email' => 'required',
                'password' => 'required'
            ],
             [
                'email.required'=> 'Email masih kosong',
                'password.required'=> 'Password masih kosong',
            ]
        );

        if (Auth::attempt($data)) {
            return redirect('/home');
        } else {
            return redirect('/login')->with('danger', 'Email / Password salah');
        }   
    }
    public function home(Request $request){
        return view('home', [
            'title' => 'Home',
        ]);
    }
    
}
