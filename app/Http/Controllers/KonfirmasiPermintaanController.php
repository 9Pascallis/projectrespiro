<?php

namespace App\Http\Controllers;

use App\Models\Permintaan;
use App\Models\ItemProduk;

use App\Models\KonfirmasiPermintaan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class KonfirmasiPermintaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $konfirmPermintaan = KonfirmasiPermintaan::all();
        return view('supply chain/dashboardKonfirmasi', compact('konfirmPermintaan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $permintaan = Permintaan::find($id);
        
        $item_produk = ItemProduk::leftJoin('permintaan', 'item_produk.id','=','permintaan.id')
        ->select('item_produk.*','permintaan.*')
        ->where('item_produk.id_permintaan',$id)
        ->with(['ukuran','warna'])->get();
        $result = $permintaan->toArray();
        $result['item_produk'] = $item_produk->toArray();
        // dd($item_produk);
        return view('supply chain/konfirmasiPermintaan', compact('permintaan','item_produk'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'id_permintaan' => ['required',
                Rule::unique((new KonfirmasiPermintaan)->getTable())->where(function ($query) use ($request) {
                    // Query untuk memeriksa apakah nilai foreign key sudah ada dalam tabel
                    return $query->where('id_permintaan', $request->id_permintaan);
                }),
            ],
            // tambahkan aturan validasi lainnya jika diperlukan
        ], [
            'id_permintaan.unique' => 'Data yang dipilih sudah ada.',
            // tambahkan pesan kustom untuk aturan validasi lainnya jika diperlukan
        ]);

        if($request->isMethod('post')){
            $data = $request->all();
            // echo "<pre>"; print_r($data); die;
            $item = new KonfirmasiPermintaan;
            $item->id_permintaan = $data['id_permintaan'];
            $item->status = $data['status'];
            $item->save();
        return redirect('/dashboard-konfirmasi')->with('create','Data Berhasil Ditambah');
        }
    }

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
