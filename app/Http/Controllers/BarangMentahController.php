<?php

namespace App\Http\Controllers;

use App\Models\ShellFabric;
use App\Models\Linning;
use App\Models\Interlining;
use App\Models\Trimming;
use App\Models\Worksheet;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BarangMentahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
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
        return view('tim produksi/barangMentah', compact('worksheet','shell_fabric','linning','interlining','trimming'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function shellfabric(Request $request)
    {
        if($request->isMethod('post')){
            $data = $request->all();
            // echo "<pre>"; print_r($data); die;
            $item = new ShellFabric;
            $item->id_worksheet = $data['id_worksheet'];
            $item->kode = $data['kode'];
            $item->description = $data['description'];
            $item->unit = $data['unit'];
            $item->cons = $data['cons'];
            $item->color = $data['color'];
            $item->qty = $data['qty'];
            $item->remarks = $data['remarks'];
            $item->save();
            return back();
    }
    }
    public function linning(Request $request)
    {
        if($request->isMethod('post')){
            $data = $request->all();
            // echo "<pre>"; print_r($data); die;
            $item = new linning;
            $item->id_worksheet = $data['id_worksheet'];
            $item->kode = $data['kode'];
            $item->description = $data['description'];
            $item->unit = $data['unit'];
            $item->cons = $data['cons'];
            $item->color = $data['color'];
            $item->qty = $data['qty'];
            $item->remarks = $data['remarks'];
            $item->save();
            return back();
    }
    }
    public function interlining(Request $request)
    {
        if($request->isMethod('post')){
            $data = $request->all();
            // echo "<pre>"; print_r($data); die;
            $item = new Interlining;
            $item->id_worksheet = $data['id_worksheet'];
            $item->kode = $data['kode'];
            $item->description = $data['description'];
            $item->unit = $data['unit'];
            $item->cons = $data['cons'];
            $item->color = $data['color'];
            $item->qty = $data['qty'];
            $item->remarks = $data['remarks'];
            $item->save();
            return back();
    }
    }
    public function trimming(Request $request)
    {
        if($request->isMethod('post')){
            $data = $request->all();
            // echo "<pre>"; print_r($data); die;
            $item = new Trimming;
            $item->id_worksheet = $data['id_worksheet'];
            $item->kode = $data['kode'];
            $item->description = $data['description'];
            $item->unit = $data['unit'];
            $item->cons = $data['cons'];
            $item->color = $data['color'];
            $item->qty = $data['qty'];
            $item->remarks = $data['remarks'];
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
