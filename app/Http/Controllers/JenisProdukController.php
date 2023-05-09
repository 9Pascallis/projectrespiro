<?php

namespace App\Http\Controllers;

use App\Models\JenisProduk;
use Illuminate\Http\Request;

class JenisProdukController extends Controller
{
  
    public function index()
    {
        $data = JenisProduk::all();
        return view('master data/Sales/dashboardJenisProduk', compact('data'));
    }
    
    public function create()
    {
        return view ('master data/Sales/tambahJenisProduk');
    }
    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_jenis_produk' => 'required'
        ]);
        JenisProduk::create($validatedData);
        return redirect('/dashboardJenisProduk')->with('create','Data Berhasil Ditambah');
    }

    public function destroy($id)
    {
        $data = JenisProduk::find($id);
        $data->delete();
        return redirect('/dashboardJenisProduk')->with('destroy','Data Berhasil Dihapus');
    }
}
