<?php

namespace App\Http\Controllers;

use App\Models\Kucing;
use App\Models\Cat;
use Illuminate\Http\Request;

class CatController extends Controller
{

    public function search(Request $request)
    {
        $race = $request->input('race');
        $cats = Kucing::where('ras', $race)->get();
        
        return view('findyourcat', ['cats' => $cats, 'race' => $race]);
    }

public function adopted()
    {
        $cats = [
            ['name' => 'Kucing Dummy 1'],
            ['name' => 'Kucing Dummy 2'],
            // Tambahkan data kucing dummy lainnya sesuai kebutuhan
        ];

        return view('cats.adopted', compact('cats'));
    }

    public function index(){
        $kucing = Kucing::all();
        return response()->json($kucing);
    }
}
