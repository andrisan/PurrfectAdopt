<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use Illuminate\Http\Request;

class CatController extends Controller
{
public function adopted()
    {
        $cats = [
            ['name' => 'Kucing Dummy 1'],
            ['name' => 'Kucing Dummy 2'],
            // Tambahkan data kucing dummy lainnya sesuai kebutuhan
        ];

        return view('cats.adopted', compact('cats'));
    }

}
