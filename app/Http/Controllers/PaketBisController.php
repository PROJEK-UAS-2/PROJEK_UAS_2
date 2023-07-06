<?php

namespace App\Http\Controllers;
use App\Models\PaketBis; 
use Illuminate\Http\Request;

class PaketBisController extends Controller
{
    function index()
    {
        $paketBisData = PaketBis::get();
        return view('backend.paket_bis.index', compact('paketBisData'));
    }

    function create()
    {
        return view('backend.paket_bis.create');
    }

    function store(Request $request)
    {
        $paketBisData = $request->validate([
            'nama_paketBis' => 'required',
            'kode_paketBis' => 'required',
            'kontak_1' => 'required',
            'kontak_2' => 'required',
            'bis_id' => 'required'
        ]);

        paketBis::create($paketBisData);

        return redirect()->to('/paketbis');
    }

    function edit($id)
    {
        $paketBisData = paketBis::find($id);
        return view('backend.paket_bis.edit', compact('paketBisData'));
    }

    function update($id, Request $request)
    {
        $validasipaketBis = $request->validate([
            'bis_id' => 'required',
            'harga_tiket' => 'required'
            
        ]);

        $paketBisData = PaketBis::find($id);
        $paketBisData->update($validasipaketBis);

        return redirect()->to('/paketbis');
    }

    function delete($id)
    {
        $paketBisData = PaketBis::find($id);
        $paketBisData->delete();
        return redirect()->to('/paketbis');
    }
}