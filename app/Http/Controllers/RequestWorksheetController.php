<?php

namespace App\Http\Controllers;

use App\Models\Permintaan;
use App\Models\ProductionPlan;
use App\Models\KonfirmasiPermintaan;
use App\Models\Worksheet;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RequestWorksheetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $worksheet =  \DB::table('worksheet')
                    ->rightJoin('production_plan','worksheet.id','=','production_plan.id')
                    ->crossJoin('konfirmasi_permintaan','production_plan.id','=','konfirmasi_permintaan.id')
                    ->crossJoin('permintaan','permintaan.id','=','konfirmasi_permintaan.id')
                    ->select('production_plan.id','nama_produk','target_delivery','HPP','CMT','nomor_ws')
                    ->get();

        return view('tim produksi/requestWorksheet', compact('worksheet'));
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
