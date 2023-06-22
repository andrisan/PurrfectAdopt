<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class E_ProfileController extends Controller
{
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('profile.setting1', ['user' => $user]);
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        
        $user->name = $request->input('name');
        $user->kontak = $request->input('kontak');

        $user->save();

        return redirect()->route('setting1.edit', $user->id)->with('success', 'Profile updated successfully.');
    }
}

