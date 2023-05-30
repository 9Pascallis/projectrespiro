<?php

namespace App\Http\Controllers;

use App\Models\KonfirmasiPermintaan;
use App\Models\ProductionPlan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class RequestProductionPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
   
        $production = \DB::table('production_plan')
        ->rightJoin('konfirmasi_permintaan','production_plan.id','=','konfirmasi_permintaan.id')
        ->crossJoin('permintaan','permintaan.id','=','konfirmasi_permintaan.id')
        ->select('production_plan.*','konfirmasi_permintaan.*','permintaan.*')
        ->get();
        // dd($production);                                                                                                    
        return view('production planning/requestProductionPlan', compact('production'));
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
