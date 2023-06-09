<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login', [
            'title'=>'Login',
        ]);
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ],
        [
            'email.required'=>'Email wajib diisi.',
            'password.required'=>'Password wajib diisi.',
        ]);

        $info_login = [
            'email'=>$request->email,
            'password'=>$request->password,
        ];

        if(Auth::attempt($info_login))
        {
            if(Auth::user()->role == 'admin')
            {
                return redirect('/main/admin');
            }
            elseif(Auth::user()->role == 'user')
            {
                return redirect('/main/user');
            }
        }
        else
        {
            return redirect('/')
                        ->withErrors('Email dan password tidak valid')
                        ->withInput();
        }
    }

    /**
     * Display the main view for admin and user.
     */
    public function main()
    {
        echo 'Halo, selamat datang';
        echo '<h1>'. Auth::user()->name .'</h1>';
        echo '<a href="/logout">Logout >></a>';
    }

    /**
     * Display the admin view.
     */
    function admin()
    {
        echo 'Halo, selamat datang di halaman admin';
        echo '<h1>'. Auth::user()->name .'</h1>';
        echo '<a href="/logout">Logout >></a>';
    }

    /**
     * Display the user view.
     */
    function user()
    {
        echo 'Halo, selamat datang di halaman user';
        echo '<h1>'. Auth::user()->name .'</h1>';
        echo '<a href="/logout">Logout >></a>';
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
