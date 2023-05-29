<?php

namespace App\Http\Controllers;

use App\Models\JenisProduk;
use Illuminate\Http\Request;
use App\Http\Requests\JenisProdukRequest;
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
    
    public function store(JenisProdukRequest $request)
    {
        $jenis_produk = $request->validated();
        JenisProduk::create($jenis_produk);
        return redirect('/dashboard-Jenis-Produk')->with('create','Data Berhasil Ditambah');
    }

    public function delete($id)
    {
        $data = JenisProduk::findOrFail($id);
        $data->delete();
        return redirect('/dashboard-Jenis-Produk')->with('delete','Data Berhasil Dihapus');
    }

   
}
