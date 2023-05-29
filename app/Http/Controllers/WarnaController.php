<?php

namespace App\Http\Controllers;


use App\Models\Warna;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\WarnaRequest;
class WarnaController extends Controller
{
    public function index()
    {
        $data = Warna::all();
        return view('masterData/warna', compact('data'));
    }

    public function create()
    {
        return view ('masterData/tambahWarna');
    }


    public function store(WarnaRequest $request)
    {
        $warna = $request->validated();
        Warna::create($warna);
        return redirect('/Warna')->with('create','Data Berhasil Ditambah');
    }

   
    public function delete($id)
    {
        $data = Warna::findOrFail($id);
        $data->delete();
        return redirect('/Warna')->with('delete','Data Berhasil Dihapus');
    }
}