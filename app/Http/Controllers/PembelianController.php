<?php

namespace App\Http\Controllers;
use App\Models\Pembelian; 
use App\Models\PaketBis;
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
        $paketBisData = PaketBis::get();
        return view('backend.pembelian.create', compact('paketBisData'));
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

        session()->flash('create','Yeay✔,Kamu berhasil <strong>menambahkan</strong> data');

        return redirect()->to('/pembelian');
    }

    function edit($id)
    {
        $paketBisData = PaketBis::get();
        $pembelianData = Pembelian::find($id);
        return view('backend.pembelian.edit', compact('pembelianData', 'paketBisData'));
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

        session()->flash('edit','Yeay🎉,Kamu berhasil <strong>mengedit</strong> data');

        return redirect()->to('/pembelian');
    }

    function delete($id)
    {
        $pembelianData = Pembelian::find($id);
        $pembelianData->delete();

        session()->flash('delete','Yeay👍,Kamu berhasil <strong>menghapus</strong> data');

        return redirect()->to('/pembelian');
    }
}
