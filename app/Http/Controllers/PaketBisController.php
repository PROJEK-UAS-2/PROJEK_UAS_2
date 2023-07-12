<?php

namespace App\Http\Controllers;

use App\Models\Bis;
use App\Models\PaketBis; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class PaketBisController extends Controller
{
    function index()
    {
        $paketBisData = PaketBis::get();
        return view('backend.paket_bis.index', compact('paketBisData'));
    }

    function create()
    {
        $bisData = Bis::get();
        return view('backend.paket_bis.create', compact('bisData'));
    }

    function store(Request $request)
    {
        $paketBisData = $request->validate([
            'bis_id' => 'required',
            'harga_tiket' => 'required'
        ]);

        PaketBis::create($paketBisData);

        session()->flash('create','Yeay✔,Kamu berhasil <strong>menambahkan</strong> data');

        return redirect()->to('/paketbis');
    }

    function edit($id)
    {
        $bisData = Bis::get();
        $paketBisData = PaketBis::find($id);
        return view('backend.paket_bis.edit', compact('paketBisData', 'bisData'));
    }

    function update($id, Request $request)
    {
        $validasipaketBis = $request->validate([
            'bis_id' => 'required',
            'harga_tiket' => 'required'
            
        ]);

        $paketBisData = PaketBis::find($id);
        $paketBisData->update($validasipaketBis);

        session()->flash('edit','Yeay🎉,Kamu berhasil <strong>mengedit</strong> data');

        return redirect()->to('/paketbis');
    }

    function delete($id)
    {
        $paketBisData = PaketBis::find($id);
        $paketBisData->delete();

        session()->flash('delete','Yeay👍,Kamu berhasil <strong>menghapus</strong> data');

        return redirect()->to('/paketbis');
    }
}