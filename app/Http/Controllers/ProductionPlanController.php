<?php

namespace App\Http\Controllers;

use App\Models\Permintaan;
use App\Models\Allocation;
use App\Models\ProductionPlan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductionPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productionPlan = ProductionPlan::all();
        return view('production planning/dashboardProductionPlan', compact('productionPlan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $permintaan = Permintaan::find($id);
        $allocation = Allocation::all();
        return view('production planning/inputProductionPlan', compact('permintaan'),compact('allocation'));
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
            $item = new ProductionPlan;
            $item->id_permintaan = $data['id_permintaan'];
            $item->id_allocation = $data['id_allocation'];
            $item->jumlah = $data['jumlah'];
            $item->HPP = $data['HPP'];
            $item->CMT = $data['CMT'];
            $item->preparation_mulai = $data['preparation_mulai'];
            $item->preparation_selesai = $data['preparation_selesai'];
            $item->ppm = $data['ppm'];
            $item->cutting_mulai = $data['cutting_mulai'];
            $item->cutting_selesai = $data['cutting_selesai'];
            $item->sewing_mulai = $data['sewing_mulai'];
            $item->sewing_selesai = $data['sewing_selesai'];
            $item->finishing_mulai = $data['finishing_mulai'];
            $item->finishing_selesai = $data['finishing_selesai'];
            $item->packing_mulai = $data['packing_mulai'];
            $item->packing_selesai = $data['packing_selesai'];
            $item->closing_mulai = $data['closing_mulai'];
            $item->closing_selesai = $data['closing_selesai'];
            $item->save();
      
        return redirect('/dashboard-production-plan')->with('create','Data Berhasil Ditambah');
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
