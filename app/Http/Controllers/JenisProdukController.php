<?php

namespace App\Http\Controllers;

use App\Models\JenisProduk;
use Illuminate\Http\Request;

class JenisProdukController extends Controller
{
  
    public function index()
    {
        $data = JenisProduk::all();
        return view('masterData/sales/dashboardJenisProduk', compact('data'));
    }
    
    public function create()
    {
        return view ('masterData/sales/tambahJenisProduk');
    }
    
    public function store(Request $request)
    {
        $validatedata = $request->validate([
            'nama_jenis_produk' => 'required'
        ]);
        JenisProduk::create($validatedata);
        return redirect('/dashboard-Jenis-Produk')->with('create','Data Berhasil Ditambah');
    }

    public function delete($id)
    {
        $data = JenisProduk::findOrFail($id);
        $data->delete();
        return redirect('/dashboard-Jenis-Produk')->with('delete','Data Berhasil Dihapus');
    }

   
}
