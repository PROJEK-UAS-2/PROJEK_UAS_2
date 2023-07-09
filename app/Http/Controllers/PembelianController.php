<?php

namespace App\Http\Controllers;
use App\Models\Pembelian; 
use Illuminate\Http\Request;

class PembelianController extends Controller
{
    function index()
    {
        $pembelianData = Pembelian::get();
        return view('backend.pembelian.index', compact('pembelianData'));
    }

    function create()
    {
        return view('backend.pembelian.create');
    }

    function store(Request $request)
    {
        $pembelianData = $request->validate([
            'nama_penumpang' => 'required', 
            'domisili' => 'required',
            'tanggal_pembelian' => 'required',
            'tanggal_keberangkatan' => 'required',
            'domisili_tujuan' => 'required',
            'paket_bis_id'=> 'required'
        ]);

        Pembelian::create($pembelianData);

        session()->flash('message','Yeay✔,Kamu berhasil <strong>menambahkan</strong> data');

        return redirect()->to('/pembelian');
    }

    function edit($id)
    {
        $pembelianData = Pembelian::find($id);
        return view('backend.pembelian.edit', compact('pembelianData'));
    }

    function update($id, Request $request)
    {
        $validasipembelian = $request->validate([
            'nama_penumpang' => 'required', 
            'domisili' => 'required',
            'tanggal_pembelian' => 'required',
            'tanggal_keberangkatan' => 'required',
            'domisili_tujuan' => 'required',
            'paket_bis_id'=> 'required'

        ]);

        $pembelianData = Pembelian::find($id);
        $pembelianData->update($validasipembelian);

        session()->flash('pesan','Yeay🎉,Kamu berhasil <strong>mengedit</strong> data');

        return redirect()->to('/pembelian');
    }

    function delete($id)
    {
        $pembelianData = Pembelian::find($id);
        $pembelianData->delete();
        return redirect()->to('/pembelian');
    }
}
