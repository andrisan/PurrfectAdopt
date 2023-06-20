<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kucing;
use App\Models\Content;
use App\Models\User;

class artikelAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('admin.artikelAdmin');
    }
 
    public function getKucing(){
        $kucing = Kucing::all();
        $totalRows = count($kucing);
        return $totalRows;
    }

    public function getContent(){
        $content = Content::all();
        $totalRows = count($content);
        return $totalRows;
    }

    public function getUser(){
        $user = User::all();
        $totalRows = count($user);
        return $totalRows;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cats = Kucing::all();
        return view('dashboard', compact(['cats']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
