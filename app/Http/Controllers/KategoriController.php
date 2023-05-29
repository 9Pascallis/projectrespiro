<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Http\Requests\KategoriRequest;
class KategoriController extends Controller
{

    public function index()
    {
        $kategori = Kategori::all();
        return view('masterData/sales/dashboardKategori', compact('kategori'));
    }

    public function create()
    {
        return view ('masterData/sales/tambahKategori');
    }


    public function store(KategoriRequest $request)
    {
        $kategori = $request->validated();
        Kategori::create($kategori);
        return redirect('/kategori')->with('create','Data Berhasil Ditambah');
    }

   
    public function delete($id)
    {
        $kategori = Kategori::findOrFail($id);
        $kategori->delete();
        return redirect('/kategori')->with('delete','Data Berhasil Dihapus');
    }
}
