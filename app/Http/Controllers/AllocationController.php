<?php

namespace App\Http\Controllers;

use App\Models\Allocation;
use Illuminate\Http\Request;
use App\Http\Requests\AllocationRequest;
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


    public function store(AllocationRequest $request)
    {
        $allocation = $request->validated();
        Allocation::create($allocation);
        return redirect('/Allocation')->with('create','Data Berhasil Ditambah');
    }

   
    public function delete($id)
    {
        $data = Allocation::findOrFail($id);
        $data->delete();
        return redirect('/Allocation')->with('delete','Data Berhasil Dihapus');
    }
}