<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipeBis;
use Illuminate\Support\Facades\Redis;

class TipeBisController extends Controller
{
    function index()
    {
        $tipeBisData = TipeBis::get();
        return view('backend.tipe_bis.index', compact('tipeBisData'));
    }

    function create()
    {
        return view('backend.tipe_bis.create');
    }

    function store(Request $request)
    {
        $tipeBisData = $request->validate([
            'tipe' => 'required'
        ]);

        TipeBis::create($tipeBisData);

        return redirect()->to('/tipebis');
    }

    function edit($id)
    {
        $tipeBisData = TipeBis::find($id);
        return view('backend.tipe_bis.edit', compact('tipeBisData'));
    }

    function update($id, Request $request)
    {
        $validasiTipeBis = $request->validate([
            'tipe' => 'required'
        ]);

        $tipeBisData = TipeBis::find($id);
        $tipeBisData->update($validasiTipeBis);

        return redirect()->to('/tipebis');
    }

    function delete($id)
    {
        $tipeBisData = TipeBis::find($id);
        $tipeBisData->delete();
        return redirect()->to('/tipebis');
    }
}
