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

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return response()->json(['pesan' => 'Deleted']);
    }
    public function getDetail($id){
        $idreturn = $id;
        return view('admin.detailuser', compact('idreturn'));
    }
    public function getUserKucing($id){
        $uk = UserKucing::where('user_id', '=', $id)
             ->join('users', 'users.id', '=', 'user_kucings.user_id')
             ->join('kucings', 'kucings.id', '=', 'user_kucings.kucing_id')
             ->select('users.*', 'users.id as IdUser', 'kucings.*')
             ->get();

        return response()->json($uk);
        // return view('admin.detailuser', compact('uk'));
    }
}
