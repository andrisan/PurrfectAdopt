<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Setting2Controller extends Controller
{
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('profile.setting2', ['user' => $user]);
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        
        $user->profesi = $request->input('profesi');
        $user->alamat = $request->input('alamat');

        $user->save();

        return redirect()->route('setting2.edit', $user->id)
            ->with('success', 'Profile updated successfully.');
    }
}

