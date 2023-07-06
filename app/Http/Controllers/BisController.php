<?php

namespace App\Http\Controllers;
use App\Models\Bis; 
use Illuminate\Http\Request;

class BisController extends Controller
{
    protected $arrayBis = [];

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

        return redirect()->to('/bis');
    }

    function delete($id)
    {
        $bisData = Bis::find($id);
        $bisData->delete();
        return redirect()->to('/bis');
    }
}
