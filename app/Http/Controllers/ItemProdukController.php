<?php

namespace App\Http\Controllers;

use App\Models\ItemProduk;
use App\Models\Permintaan;
use App\Models\Warna;
use App\Models\Ukuran;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ItemProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $warna = Warna::all();
        $ukuran = Ukuran::all();
        return view ('sales/inputWarna', compact('warna','ukuran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $permintaan = Permintaan::find($id);
        $warna = Warna::all();
        $ukuran = Ukuran::all();
        // dd($permintaan);
        return view('sales/inputWarna', compact('warna','ukuran','permintaan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->isMethod('post')){
            $data = $request->all();
            // echo "<pre>"; print_r($data); die;
            $item = new ItemProduk;
            $item->id_permintaan = $data['id_permintaan'];
            $item->id_warna = $data['id_warna'];
            $item->id_ukuran = $data['id_ukuran'];
            $item->total = $data['total'];
            $item->save();
            return back();
        // return redirect('/dashboard-permintaan')->with('create','Data Berhasil Ditambah');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $permintaan = Permintaan::find($id);
        $item_produk = ItemProduk::all();

        // dd($item_produk);
        return view('sales/detailPermintaan', compact('permintaan','item_produk'));
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
