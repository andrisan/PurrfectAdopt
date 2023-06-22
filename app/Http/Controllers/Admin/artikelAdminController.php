<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\User;
use Illuminate\Support\Facades\DB;

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
    public function show(){
        $data = content::all();
        return view('admin.artikelAdmin',['content'=>$data]);
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

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $contents = DB::table('contents')->where('id',$id)->get();
        //passing data pegawai yang didapat ke view edit.blade.php
        return view('edit',['contents' => $id]);
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
    public function destroy($id)
    {
        DB::table('contents')->where('id',$id)->delete();
        return redirect('artikelAdmin');
    }
}
