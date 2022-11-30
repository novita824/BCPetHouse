<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    function index(){
        return view("sesi/index");
    }
    function login(Request $request){
         $request->validate([
            'email'=>'required',
            'password'=>'required'
         ],[
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi',
         ]);

         $infologin = [
            'email' => $request->email,
            'password' => $request->password,
         ];

         if(Auth::attempt($infologin)){
            return redirect('admin.html')->with('succes', 'Berhasil login');
         }
         else{
            return redirect('sesi')->withErrors('Email dan password yang dimasukkan tidak valid');
         }
    }
}
