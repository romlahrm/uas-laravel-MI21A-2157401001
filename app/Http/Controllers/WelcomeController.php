<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    //
    public function welcome(){
        return view('welcome', [
            'title' => 'Welcome'
        ]);
    }
    function logout(Request $request) {
        Auth::logout();
        return redirect('/');
    }
}
