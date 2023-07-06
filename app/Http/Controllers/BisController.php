<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BisController extends Controller
{
    protected $arrayBis = [];

    function index()
    {
        $dataBis = session()->get('dataBisNew');
        return view('bis.index', compact('dataBis'));
    }

    function create()
    {
        return view('bis.form');
    }

    function store(Request $request)
    {

        $namaBis = $request->nama_bis;
        $merkBis = $request->merk_bis;

        $dataBisBaru = [
            'namaBis' => $namaBis,
            'merkBis' => $merkBis
        ];

        array_push($this->arrayBis, $dataBisBaru);

        return redirect()->to('/bis')->with('dataBisNew', $this->arrayBis);
    }
}
