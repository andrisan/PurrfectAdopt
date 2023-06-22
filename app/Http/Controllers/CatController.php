<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use App\Models\Kucing;
use Illuminate\Http\Request;

class CatController extends Controller
{
    public function index(){
        $cats = Kucing::all();
        return view('/cats/adopted', compact('cats'));
    }
}
