<?php

namespace App\Http\Controllers;

use App\Models\ItemProduk;
use App\Models\Permintaan;
use App\Models\Warna;
use App\Models\Ukuran;
use App\Http\Requests\ItemProdukRequest;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
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

        $item_produk = ItemProduk::leftJoin('permintaan', 'item_produk.id','=','permintaan.id')
        ->select('item_produk.*','permintaan.*')
        ->where('item_produk.id_permintaan',$id)
        ->with(['ukuran','warna'])->get();
        $result = $permintaan->toArray();
        $result['item_produk'] = $item_produk->toArray();

        // dd($result);
        return view('sales/inputWarna', compact('warna','ukuran','permintaan','item_produk'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    if ($request->isMethod('post')) {
        $data = $request->all();

        // Cek apakah warna sudah ada dalam item produk
        $itemProduk = ItemProduk::where('id_permintaan', $data['id_permintaan'])
            ->where('id_warna', $data['id_warna'])
            ->first();

        if ($itemProduk) {
            // Jika warna sudah ada, berikan pesan error dan redirect dengan flash message
            Session::flash('error', 'Warna sudah ada dalam item produk.');
            return back();
        }

        $item = new ItemProduk;
        $item->id_permintaan = $data['id_permintaan'];
        $item->id_warna = $data['id_warna'];
        $item->id_ukuran = $data['id_ukuran'];
        $item->total = $data['total'];
        $item->save();

        // Update jumlah di Permintaan
        $permintaan = Permintaan::findOrFail($data['id_permintaan']);
        $totalItemProduk = $permintaan->itemProduk()->sum('total');
        $permintaan->jumlah = $totalItemProduk;
        $permintaan->save();

        return back();
    }
}
    public function calculateTotal($id_permintaan)
    {
        $total = ItemProduk::where('id_permintaan', $id_permintaan)->sum('total');
        return $total;
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $permintaan = Permintaan::with('ItemProduk')->find($id);

        $total = $this->calculateTotal($id);
        $item_produk = ItemProduk::leftJoin('permintaan', 'item_produk.id','=','permintaan.id')
        ->select('item_produk.*','permintaan.*')
        ->where('item_produk.id_permintaan',$id)
        ->with(['ukuran','warna'])->get();
        $result = $permintaan->toArray();
        $result['item_produk'] = $item_produk->toArray();

        // dd($result);
        return view('sales/detailPermintaan', compact('permintaan','item_produk')) ->with('total', $total);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
{
    $itemProduk = ItemProduk::findOrFail($id);
    $warna = Warna::all();
    $ukuran = Ukuran::all();

    return view('sales/editItemProduk', compact('itemProduk', 'warna', 'ukuran'));
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
    $data = $request->all();

    // Cek apakah warna sudah ada dalam item produk, kecuali untuk item yang sedang diupdate
    $itemProduk = ItemProduk::where('id_permintaan', $data['id_permintaan'])
        ->where('id_warna', $data['id_warna'])
        ->where('id', '!=', $id)
        ->first();

    if ($itemProduk) {
        // Jika warna sudah ada, berikan pesan error dan redirect dengan flash message
        Session::flash('error', 'Warna sudah ada dalam item produk.');
        return back();
    }

    $item = ItemProduk::findOrFail($id);
    $item->id_permintaan = $data['id_permintaan'];
    $item->id_warna = $data['id_warna'];
    $item->id_ukuran = $data['id_ukuran'];
    $item->total = $data['total'];
    $item->save();

    // Update jumlah di Permintaan
    $permintaan = Permintaan::findOrFail($data['id_permintaan']);
    $totalItemProduk = $permintaan->itemProduk()->sum('total');
    $permintaan->jumlah = $totalItemProduk;
    $permintaan->save();

    return redirect()->route('konfirmasi-permintaan', ['id' => $data['id_permintaan']]);
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $data = ItemProduk::findOrFail($id);
        $data->delete();
        return back();
    }
}
