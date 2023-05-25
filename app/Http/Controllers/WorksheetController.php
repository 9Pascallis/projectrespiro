<?php

namespace App\Http\Controllers;

use App\Models\Permintaan;
use App\Models\Worksheet;
use App\Models\ProductionPlan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WorksheetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $worksheet = Worksheet::all();
        return view('tim produksi/worksheet', compact('worksheet'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $productionPlan = ProductionPlan::find($id);
        // dd($productionPlan);
        return view('tim produksi/inputWorksheet', compact('productionPlan'));
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
            //  echo "<pre>"; print_r($data); die;

            $item = new Worksheet;
            $item->id_production_plan = $data['id_production_plan'];
            $item->nomor_ws = $data['nomor_ws'];
            $item->nama_brand = $data['nama_brand'];
            $item->nama_buyer = $data['nama_buyer'];
            $item->save();

            return redirect('/worksheet')->with('create','Data Berhasil Ditambah');
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
