<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SignUpController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth2.signup', [
            'title'=>'Sign Up',
        ]);
    }

    public function signup(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'role' => ['required', 'string', 'max:5'],
            'password' => ['required', 'string', 'min:5'],
        ]);

        if ($validator->fails()) {
            return redirect('/signup')
                        ->withErrors($validator)
                        ->withInput();
        }

        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'role' => $request->input('role'),
            'password' => bcrypt($request->input('password')),
        ]);

        return redirect('/')->with('success', 'Registration successful! Please log in.');
    }
}
