<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function login(){
        return view('login', [
            'title' => 'Login'
        ]);
    }
    public function beranda(Request $request){
        // $data = [
        //     'email' => $request->input('email'),
        //     'password' => $request->input('password')
        // ];
        // dd($data);
        return view('beranda', [
            'title' => 'Beranda',
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ]);
    }
}
