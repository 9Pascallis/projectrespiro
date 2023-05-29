<?php

namespace App\Http\Controllers;

use App\Models\SubKategori;
use Illuminate\Http\Request;
use App\Http\Requests\SubKategoriRequest;
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


    public function store(SubKategoriRequest $request)
    {
        $sub_kategori = $request->validated();
        SubKategori::create($sub_kategori);
        return redirect('/Sub-Kategori')->with('create','Data Berhasil Ditambah');
    }

   
    public function delete($id)
    {
        $data = SubKategori::findOrFail($id);
        $data->delete();
        return redirect('/Sub-Kategori')->with('delete','Data Berhasil Dihapus');
    }
}
