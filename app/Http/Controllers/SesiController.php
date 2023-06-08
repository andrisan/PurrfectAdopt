<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    function index()
    {
        return view('auth2.login', [
            'title'=>'Login',
        ]);
    }

    function login(Request $req)
    {
        $req->validate([
            'email'=>'required',
            'password'=>'required',
        ],
        [
            'email.required'=>'Email wajib diisi.',
            'password.required'=>'Password wajib diisi.',
        ]);

        $info_login = [
            'email'=>$req->email,
            'password'=>$req->password,
        ];

        if(Auth::attempt($info_login))
        {
            if(Auth::user()->role == 'admin')
            {
                return redirect('/users/admin');
            }
            elseif(Auth::user()->role == 'user')
            {
                return redirect('/users/user');
            }
        }
        else
        {
            return redirect('/')
                        ->withErrors('Email dan password tidak valid')
                        ->withInput();
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
