<?php

namespace App\Http\Controllers;

use App\Models\Worksheet;
use App\Models\ProductionPlan;
use App\Models\Cutting;
use App\Models\ProcessCutting;
use App\Models\Warna;
use App\Models\Ukuran;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CuttingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    $worksheets = Worksheet::all();
    $processCuttings = ProcessCutting::all();

    $cutting = DB::table('cutting')
        ->join('worksheet', 'cutting.id_worksheet', '=', 'worksheet.id')
        ->join('process_cutting', 'cutting.id_process_cutting', '=', 'process_cutting.id')
        ->select('worksheet.id as worksheet_id', 'process_cutting.id as process_cutting_id', 'cutting.total')
        ->groupBy('worksheet_id', 'process_cutting_id', 'cutting.total') // Tambahkan cutting.total di sini
        ->get();

    $data = [];
    foreach ($cutting as $item) {
        $worksheetId = $item->worksheet_id;
        $processCuttingId = $item->process_cutting_id;
        $total = $item->total;

        if (!isset($data[$worksheetId])) {
            $data[$worksheetId] = [];
        }

        if (!isset($data[$worksheetId][$processCuttingId])) {
            $data[$worksheetId][$processCuttingId] = 0;
        }

        $data[$worksheetId][$processCuttingId] += $total;
    }

    return view('production status.Cutting.dashboardCuttingOutput', compact('worksheets', 'processCuttings', 'data'));
}



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $worksheet = Worksheet::find($id);
        $warna = Warna::all();
        $ukuran = Ukuran::all();

        $cutting = Cutting::leftJoin('worksheet', 'cutting.id','=','worksheet.id')
        ->select('cutting.*','worksheet.id')
        ->where('cutting.id_worksheet',$id)
        ->with(['ukuran','warna'])->get();
        $result = $worksheet->toArray();
        $result['cutting'] = $cutting->toArray();

        
        // dd($cutting);
        return view('production status/Cutting/inputCuttingOutput', compact('worksheet','warna','ukuran','cutting'));
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

        $item = new Cutting;
        $item->id_process_cutting = $data['id_process_cutting'];
        $item->id_worksheet = $data['id_worksheet'];
        $item->id_warna = $data['id_warna'];
        $item->id_ukuran = $data['id_ukuran'];
        $item->total = $data['total'];
        $item->save();

        return back();
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
      

        $cutting = Cutting::leftJoin('worksheet', 'cutting.id','=','worksheet.id')
        ->select('cutting.*','worksheet.*')
        ->where('cutting.id_worksheet',$id)
        ->with(['ukuran','warna'])->get();
        $result = $worksheet->toArray();
        $result['cutting'] = $cutting->toArray();

       
        // dd($worksheet);
        return view('production status/Cutting/detailCuttingOutput', compact('worksheet','cutting'));
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
