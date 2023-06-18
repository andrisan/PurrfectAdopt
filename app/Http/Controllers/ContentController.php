<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;

class ContentController extends Controller
{
    public function store(Request $request)
{
    $data = $request->validate([
        'judul' => 'required|string|max:50',
        'isi' => 'required|string',
        'galery' => 'nullable|file|image',
    ]);

    // Mengambil data input dari form
    $judul = $data['judul'];
    $isi = $data['isi'];

    // Mengambil file gambar jika ada
    if ($request->hasFile('galery')) {
        $file = $request->file('galery');

        // Simpan file gambar ke dalam direktori tertentu
        $path = $file->store('public/galery');

        // Simpan path file gambar ke dalam database
        $galery = $path;
    } else {
        $galery = null;
    }

    // Membuat record baru dalam tabel "contents"
    $content = new Content();
    $content->judul = $judul;
    $content->isi = $isi;
    $content->galery = $galery;
    $content->save();

    // Redirect ke halaman atau rute yang diinginkan setelah create berhasil
    return redirect()->route('article');
}

}
