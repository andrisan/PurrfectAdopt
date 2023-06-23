<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;

class DiskusiController extends Controller
{
    public function index()
{
    $contents = Content::all();

    return view('/profile/diskusi', compact('contents'));
}


    public function show($id)
    {
        $content = Content::find($id);

        return view('/profile/balasDiskusi', compact('content'));
    }
}
