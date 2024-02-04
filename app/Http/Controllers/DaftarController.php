<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class DaftarController extends Controller
{
    //
    public function daftar(){
        return view('daftar', [
            'title' => 'Daftar'
        ]);
    }
    public function simpan(Request $request){
        $name     = $request->name;
        $email    = $request->email;
        $password = $request->password;

        $user = new User();
        $user->name     = $name;
        $user->email    = $email;
        $user->password = Hash::make($password);

        // try {

            if ($user->save()) {
                return redirect('/login');
            } else {
                Session::flash('danger', 'Gagal simpan user');
            }

        // } catch (Exception $e) {
        //     Session::flash('danger', 'Gagal simpan user');
        // }
        // return redirect('/user');
    }
};
