<?php

namespace App\Http\Controllers;

use App\Models\Bis;
use App\Models\TipeBis;
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
        $tipeBisData = TipeBis::get();
        return view('backend.bis.create', compact('tipeBisData'));
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

        session()->flash('create','Yeay✔,Kamu berhasil <strong>menambahkan</strong> data');

        return redirect()->to('/bis');
    }

    function edit($id)
    {
        $bisData = Bis::find($id);
        $tipeBisData = TipeBis::get();
        return view('backend.bis.edit', compact('bisData', 'tipeBisData'));
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

        session()->flash('edit','Yeay🎉,Kamu berhasil <strong>mengedit</strong> data');

        return redirect()->to('/bis');
    }

    function delete($id)
    {
        $bisData = Bis::find($id);
        $bisData->delete();

        session()->flash('delete','Yeay👍,Kamu berhasil <strong>menghapus</strong> data');

        return redirect()->to('/bis');
    }
}
