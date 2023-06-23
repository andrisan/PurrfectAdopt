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
        $cats = Kucing::all();
        return view('/cats/adopted', compact('cats'));
    }

    public function store(Request $request)
    {
        // Validasi data yang diterima dari form
        $validatedData = $request->validate([
            'nama' => 'required|string|max:50',
            'warna' => 'required|string|max:10',
            'ras' => 'required|string|max:20',
            'gender' => 'required|in:jantan,betina',
            'berat' => 'required|integer',
            'tinggi' => 'nullable|integer',
            'deskripsi' => 'required|string',
            'foto' => 'image|max:2048', // Validasi bahwa input adalah gambar dengan ukuran maksimum 2MB
        ]);

        // Simpan data kucing ke dalam database
        $kucing = new Kucing;
        $kucing->nama = $validatedData['nama'];
        $kucing->warna = $validatedData['warna'];
        $kucing->ras = $validatedData['ras'];
        $kucing->gender = $validatedData['gender'] == 'jantan' ? true : false;
        $kucing->berat_badan = $validatedData['berat'];
        $kucing->tinggi_badan = $validatedData['tinggi'];
        $kucing->description = $validatedData['deskripsi'];
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $foto = file_get_contents($file->getRealPath());
            $kucing->foto = $foto;
        }
    
        $kucing->save();

        // Redirect ke halaman yang sesuai atau tampilkan pesan berhasil
        return redirect()->back()->with('success', 'Data kucing berhasil disimpan!');
    }
}
