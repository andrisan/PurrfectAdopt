<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;

class ContentController extends Controller
{
    public function create()
    {
        $contents = Content::all();
        return view('article.article', compact(['contents']));
    }
}
