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
            $data = $request->validate([
                'name' => 'required',
                'email' => 'required',
                'password' => 'required'
            ],
             [
                'name.required'=> 'Nama masih kosong',
                'email.required'=> 'Email masih kosong',
                'password.required'=> 'Password masih kosong',
            ]
        );
    
            $data['password']=Hash::make($data['password']);
    
            User::create($data);
            return redirect('/login')->with('success', 'Pendaftaran Berhasil');
        // } catch (Exception $e) {
        //     Session::flash('danger', 'Gagal simpan user');
        // }
        // return redirect('/user');
    }
};
