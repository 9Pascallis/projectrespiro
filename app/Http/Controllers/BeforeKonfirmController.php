<?php

namespace App\Http\Controllers;

use App\Models\Permintaan;
use App\Models\KonfirmasiPermintaan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BeforeKonfirmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $konfirm = \DB::table('konfirmasi_permintaan')
                    ->rightJoin('permintaan','permintaan.id','=','konfirmasi_permintaan.id')
                    ->select('permintaan.id','nama_produk','target_delivery','status','jumlah')
                    ->get();
        // $konfirmPermintaan = KonfirmasiPermintaan::all();
        return view('supply chain/beforeKonfirmasi', compact('konfirm'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
