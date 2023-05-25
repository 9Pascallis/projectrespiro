<?php

namespace App\Http\Controllers;

use App\Models\SubKategori;
use Illuminate\Http\Request;

class SubKategoriController extends Controller
{

    public function index()
    {
        $data = SubKategori::all();
        return view('masterData/sales/dashboardSubKategori', compact('data'));
    }


    public function create()
    {
        return view ('masterData/sales/tambahSubKategori');
    }


    public function store(Request $request)
    {
        $validatedata = $request->validate([
            'nama_sub_kategori' => 'required'
        ]);
        SubKategori::create($validatedata);
        return redirect('/dashboard-Sub-Kategori')->with('create','Data Berhasil Ditambah');
    }

   
    public function delete($id)
    {
        $data = SubKategori::findOrFail($id);
        $data->delete();
        return redirect('/dashboard-Sub-Kategori')->with('delete','Data Berhasil Dihapus');
    }
}
