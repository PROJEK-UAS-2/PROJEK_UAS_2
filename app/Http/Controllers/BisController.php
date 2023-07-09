<?php

namespace App\Http\Controllers;

use App\Models\Bis; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class BisController extends Controller
{

    function index()
    {
        $bisData = Bis::get();
        return view('backend.bis.index', compact('bisData'));
    }

    function create()
    {
        return view('backend.bis.create');
    }

    function store(Request $request)
    {
        $bisData = $request->validate([
            'nama' => 'required',
            'kode' => 'required',
            'nomor_polisi' => 'required',
            'jumlah_unit' => 'required',
            'jurusan' => 'required',
            'tipe_bis_id' => 'required'
        ]);

        Bis::create($bisData);

        session()->flash('message','Yeay✔,Kamu berhasil <strong>menambahkan</strong> data');

        return redirect()->to('/bis');
    }

    function edit($id)
    {
        $bisData = Bis::find($id);
        return view('backend.bis.edit', compact('bisData'));
    }

    function update($id, Request $request)
    {
        $validasiBis = $request->validate([
            'nama' => 'required',
            'kode' => 'required',
            'nomor_polisi' => 'required',
            'jumlah_unit' => 'required',
            'jurusan' => 'required',
            'tipe_bis_id' => 'required'
        ]);

        $bisData = Bis::find($id);
        $bisData->update($validasiBis);

        session()->flash('pesan','Yeay🎉,Kamu berhasil <strong>mengedit</strong> data');

        return redirect()->to('/bis');
    }

    function delete($id)
    {
        $bisData = Bis::find($id);
        $bisData->delete();
        return redirect()->to('/bis');
    }
}
