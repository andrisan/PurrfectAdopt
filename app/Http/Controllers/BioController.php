<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class BioController extends Controller
{
    public function index()
    {
        $profiles = User::all();
        return view('/bio', compact('profiles'));
    }
    public function show($id)
{
    $bio = User::find($id);

    if (!$bio) {
        return abort(404);
    }

    return view('/bio', compact('bio'));
}



}
