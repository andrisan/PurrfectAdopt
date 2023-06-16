<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserKucing;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        return view('admin.user');
    }

    public function getUser(){
        $user = User::all();
        return response()->json($user);
    }

    public function getDetail(){
        return view('admin.detailuser');
    }
    public function create()
    {
        //

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
    public function destroy( $id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return response()->json(['pesan' => 'Deleted']);
    }

    public function getUserKucing($id){
        $user = UserKucing::where('user_id', '=', $id)
                ->groupBy('user_id')
                // ->rightJoin('users', 'users.id', '=', 'user_kucings.user_id')
                // ->join('kucings', 'kucings.id', '=', 'user_kucings.kucing_id')
                // ->select('users.*', 'kucings.*')

                ->get();
        // $user = UserKucing::join('users', 'user_kucings.user_id', '=', 'users.id')
        //         ->join('kucings', 'user_kucings.kucing_id', '=', 'kucings.id')
        //         ->where('user_kucings.user_id', 'LIKE', '%' . $id . '%')
        //         ->select('users.*','users.id AS id_user', 'kucings.*', 'kucings.id AS id_kucing')
        //         ->get();
        return response()->json($user);
        // return view('admin.detailuser', compact("user"));
    }
}
