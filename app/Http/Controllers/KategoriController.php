<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{

    public function index()
    {
        $data = Kategori::all();
        return view('masterData/sales/dashboardKategori', compact('data'));
    }

    public function create()
    {
        return view ('masterData/sales/tambahKategori');
    }


    public function store(Request $request)
    {
        $validatedata = $request->validate([
            'nama_kategori' => 'required'
        ]);
        Kategori::create($validatedata);
        return redirect('/dashboard-Kategori')->with('create','Data Berhasil Ditambah');
    }

   
    public function delete($id)
    {
        $data = Kategori::findOrFail($id);
        $data->delete();
        return redirect('/dashboard-Kategori')->with('delete','Data Berhasil Dihapus');
    }
}
