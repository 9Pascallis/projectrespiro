<?php

namespace App\Http\Controllers;

use App\Models\Allocation;
use Illuminate\Http\Request;

class AllocationController extends Controller
{
    public function index()
    {
        $data = Allocation::all();
        return view('masterData/allocation', compact('data'));
    }

    public function create()
    {
        return view ('masterData/tambahAllocation');
    }


    public function store(Request $request)
    {
        $validatedata = $request->validate([
            'nama_allocation' => 'required'
        ]);
        Allocation::create($validatedata);
        return redirect('/dashboard-Allocation')->with('create','Data Berhasil Ditambah');
    }

   
    public function delete($id)
    {
        $data = Allocation::findOrFail($id);
        $data->delete();
        return redirect('/dashboard-Allocation')->with('delete','Data Berhasil Dihapus');
    }
}