<?php

namespace App\Http\Controllers;

use App\Models\Permintaan;
use App\Models\ProductionPlan;
use App\Models\KonfirmasiPermintaan;
use App\Models\Worksheet;
use App\Models\Schedule;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schedule = Schedule::all();
        // dd($schedule);
        return view('production status/schedule/dashboardSchedule', compact('schedule'));
    }

    public function tambah()
    {
       
        $schedule =  \DB::table('schedule')
                    ->rightJoin('worksheet','schedule.id_worksheet','=','worksheet.id')
                    ->join('production_plan', 'worksheet.id_production_plan', '=', 'production_plan.id')
                    ->join('konfirmasi_permintaan', 'production_plan.id_konfirmasi_permintaan', '=', 'konfirmasi_permintaan.id')
                    ->join('permintaan', 'konfirmasi_permintaan.id_permintaan', '=', 'permintaan.id')
                    ->select('worksheet.id','nama_produk','target_delivery','schedule.ppm')
                    ->get();
        return view('production status/schedule/tambahSchedule', compact('schedule'));
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
        return view('production status/schedule/inputSchedule', compact('worksheet'));
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
            $item = new Schedule;
            $item->id_worksheet = $data['id_worksheet'];
            $item->ppm = $data['ppm'];
            $item->cutting_mulai = $data['cutting_mulai'];
            $item->cutting_selesai = $data['cutting_selesai'];
            $item->sewing_mulai = $data['sewing_mulai'];
            $item->sewing_selesai = $data['sewing_selesai'];
            $item->save();

            return redirect('/dashboard-schedule')->with('create','Data Berhasil Ditambah');
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
        $schedule = Schedule::find($id);
        // dd($schedule);
        return view('production status/schedule/editSchedule', compact('schedule'));
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
        $schedule = Schedule::find($id);
        $schedule->update($request->all());
        return redirect('/dashboard-schedule')->with('update', 'Data Berhasil diupdate!');
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
