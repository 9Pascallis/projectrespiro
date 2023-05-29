<?php

namespace App\Http\Controllers;


use App\Models\Ukuran;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UkuranRequest;
class UkuranController extends Controller
{
    public function index()
    {
        $data = Ukuran::all();
        return view('masterData/ukuran', compact('data'));
    }

    public function create()
    {
        return view ('masterData/tambahUkuran');
    }


    public function store(UkuranRequest $request)
    {
        $ukuran = $request->validated();
        Ukuran::create($ukuran);
        return redirect('/Ukuran')->with('create','Data Berhasil Ditambah');
    }

   
    public function delete($id)
    {
        $data = Ukuran::findOrFail($id);
        $data->delete();
        return redirect('/Ukuran')->with('delete','Data Berhasil Dihapus');
    }
}
