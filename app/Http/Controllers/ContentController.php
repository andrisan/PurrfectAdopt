<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;

class ContentController extends Controller
{
    public function create()
    {
        $contents = Content::all();
        return view('article.article', [
            'title' => 'Article',
        ], compact(['contents']));
    }

    public function show_details($id)
    {
        $article = Content::find($id);
        $article->isi = str_replace("\n", "<br>", $article->isi);
        return view('article.articledetails', [
            'title' => 'Article Details',
        ], compact(['article']));
    }
    
    public function store(Request $request)
{
    // Validasi inputan
    $validatedData = $request->validate([
        'judul' => 'required|max:200',
        'isi' => 'required',
        'galery' => 'required|image',
    ]);

    // Ambil data penulis berdasarkan pengguna saat ini
    $penulis = auth()->user()->name;

    // Buat objek content baru
    $content = new Content();
    $content->judul = $validatedData['judul'];
    $content->penulis = $penulis;
    $content->status = false;
    $content->isi = $validatedData['isi'];
    $content->galery = file_get_contents($request->file('galery')->getRealPath());
    $content->save();

    // Redirect atau melakukan tindakan lain setelah berhasil menyimpan data
    return redirect()->back()->with('success', 'Post successfully created!');
}

}
