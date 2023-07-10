<?php

namespace App\Http\Controllers;
use App\Models\Supir;
use Illuminate\Http\Request;

class SupirController extends Controller
{
    function index()
    {
        $supirData = Supir::get();
        return view('backend.supir.index', compact('supirData'));
    }

    function create()
    {
        return view('backend.supir.create');
    }

    function store(Request $request)
    {
        $supirData = $request->validate([
            'nama_supir' => 'required',
            'kode_supir' => 'required',
            'kontak_1' => 'required',
            'kontak_2' => 'required',
            'bis_id' => 'required'
        ]);

        Supir::create($supirData);

        session()->flash('create','Yeay✔,Kamu berhasil <strong>menambahkan</strong> data');

        return redirect()->to('/supir');
    }

    function edit($id)
    {
        $supirData = Supir::find($id);
        return view('backend.supir.edit', compact('supirData'));
    }

    function update($id, Request $request)
    {
        $validasiSupir = $request->validate([
            'nama_supir' => 'required',
            'kode_supir' => 'required',
            'kontak_1' => 'required',
            'kontak_2' => 'required',
            'bis_id' => 'required'
        ]);

        $supirData = Supir::find($id);
        $supirData->update($validasiSupir);

        session()->flash('edit','Yeay🎉,Kamu berhasil <strong>mengedit</strong> data');

        return redirect()->to('/supir');
    }

    function delete($id)
    {
        $supirData = Supir::find($id);
        $supirData->delete();

        session()->flash('delete','Yeay👍,Kamu berhasil <strong>menghapus</strong> data');

        return redirect()->to('/supir');
    }
}
