<?php

namespace App\Http\Controllers;

use App\Models\Permintaan;
use App\Models\Worksheet;
use App\Models\ShellFabric;
use App\Models\Linning;
use App\Models\Interlining;
use App\Models\Trimming;
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
            $item->notes = $data['notes'];
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
        $worksheet = Worksheet::find($id);

        $shell_fabric = ShellFabric::leftJoin('worksheet', 'shell_fabric.id','=','worksheet.id')
        ->select('shell_fabric.*','worksheet.*')
        ->where('shell_fabric.id_worksheet',$id)
        ->get();
        $result = $worksheet->toArray();
        $result['shell_fabric'] = $shell_fabric->toArray();

        $linning = Linning::leftJoin('worksheet', 'linning.id','=','worksheet.id')
        ->select('linning.*','worksheet.*')
        ->where('linning.id_worksheet',$id)
        ->get();
        $result = $worksheet->toArray();
        $result['linning'] = $linning->toArray();

        $interlining = Interlining::leftJoin('worksheet', 'interlining.id','=','worksheet.id')
        ->select('interlining.*','worksheet.*')
        ->where('interlining.id_worksheet',$id)
        ->get();
        $result = $worksheet->toArray();
        $result['interlining'] = $interlining->toArray();

        $trimming = Trimming::leftJoin('worksheet', 'trimming.id','=','worksheet.id')
        ->select('trimming.*','worksheet.*')
        ->where('trimming.id_worksheet',$id)
        ->get();
        $result = $worksheet->toArray();
        $result['trimming'] = $trimming->toArray();
        // dd($result);
        return view('tim produksi/detailWorksheet', compact('worksheet','shell_fabric','linning','interlining','trimming'));
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
