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
        $email      = $request->email;
        $password   = $request->password;

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
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
