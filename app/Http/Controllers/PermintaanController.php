<?php

namespace App\Http\Controllers;

use App\Models\JenisProduk;
use App\Models\Kategori;
use App\Models\SubKategori;
use App\Models\Warna;
use App\Models\Ukuran;
use App\Http\Controllers\Controller;
use App\Models\Permintaan;
use Illuminate\Http\Request;


class PermintaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $permintaan = Permintaan::all();
        $warna = Warna::all();
        $ukuran = Ukuran::all();
        return view('sales/permintaanKonfirmasi', compact('permintaan','warna','ukuran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $jenisproduk = JenisProduk::all();
        $kategori = Kategori::all();
        $subKategori = SubKategori::all();
        return view ('sales/inputPermintaan', compact('jenisproduk','kategori','subKategori'));
    }

 
    public function store(Request $request)
    {
        $validatedata = $request->validate([
            'nama_produk' => 'required',
            'target_delivery' => 'required',
            'id_jenis_produk' => 'required',
            'id_kategori' => 'required',
            'id_sub_kategori' => 'required',
            'jumlah' => 'required'

        ]);
        Permintaan::create($validatedata);
        return redirect('/dashboard-permintaan')->with('create','Data Berhasil Ditambah');
    }
    
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
