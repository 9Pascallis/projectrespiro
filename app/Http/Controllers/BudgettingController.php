<?php

namespace App\Http\Controllers;

use App\Models\ProductionPlan;
use App\Models\Permintaan;
use App\Models\Allocation;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BudgettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
 
        $permintaan = Permintaan::all();
        $allocation = Allocation::all();
        $productionPlan = ProductionPlan::all();

        return view('production planning/budgeting', compact('permintaan','allocation','productionPlan'));
    }



    public function filter(Request $request)
    {
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');

        $permintaan = Permintaan::whereBetween('target_delivery', [$start_date, $end_date])->get();
        $productionPlan = ProductionPlan::all();
        $allocation = Allocation::all();

         return view('production planning/budgeting',compact('permintaan','productionPlan','allocation'));                       
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
