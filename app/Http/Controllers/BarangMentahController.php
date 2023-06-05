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
        // dd($worksheet);
        return view('tim produksi/barangMentah', compact('worksheet'));
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
