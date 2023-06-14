<?php

namespace App\Http\Controllers;

use App\Models\Worksheet;
use App\Models\ProductionPlan;
use App\Models\Sewing;
use App\Models\ProcessSewing;
use App\Models\Warna;
use App\Models\Ukuran;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SewingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    $worksheets = Worksheet::all();
    $processSewings = ProcessSewing::all();

    $sewing = DB::table('sewing')
        ->join('worksheet', 'sewing.id_worksheet', '=', 'worksheet.id')
        ->join('process_sewing', 'sewing.id_process_sewing', '=', 'process_sewing.id')
        ->select('worksheet.id as worksheet_id', 'process_sewing.id as process_sewing_id', 'sewing.total')
        ->groupBy('worksheet_id', 'process_sewing_id', 'sewing.total') // Tambahkan sewing.total di sini
        ->get();

    $data = [];
    foreach ($sewing as $item) {
        $worksheetId = $item->worksheet_id;
        $processSewingId = $item->process_sewing_id;
        $total = $item->total;

        if (!isset($data[$worksheetId])) {
            $data[$worksheetId] = [];
        }

        if (!isset($data[$worksheetId][$processSewingId])) {
            $data[$worksheetId][$processSewingId] = 0;
        }

        $data[$worksheetId][$processSewingId] += $total;
    }

    return view('production status/Sewing/dashboardSewingOutput', compact('worksheets', 'processSewings', 'data'));
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

        $sewing = Sewing::leftJoin('worksheet', 'sewing.id','=','worksheet.id')
        ->select('sewing.*','worksheet.id')
        ->where('sewing.id_worksheet',$id)
        ->with(['ukuran','warna'])->get();
        $result = $worksheet->toArray();
        $result['sewing'] = $sewing->toArray();

        
        // dd($sewing);
        return view('production status/Sewing/inputSewingOutput', compact('worksheet','warna','ukuran','sewing'));
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

        $item = new Sewing;
        $item->id_process_sewing = $data['id_process_sewing'];
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
      

        $sewing = Sewing::leftJoin('worksheet', 'sewing.id','=','worksheet.id')
        ->select('sewing.*','worksheet.*')
        ->where('sewing.id_worksheet',$id)
        ->with(['ukuran','warna'])->get();
        $result = $worksheet->toArray();
        $result['sewing'] = $sewing->toArray();

       
        // dd($worksheet);
        return view('production status/Sewing/detailSewingOutput', compact('worksheet','sewing'));
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
