<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembelian extends Model
{
    use HasFactory;

    protected $table = "Pembelian";

    protected $fillable = [
        'nama_penumpang',
        'domisili',
        'tanggal_pembelian',
        'tanggal_keberangkatan',
        'domisili_tujuan',
        'paket_bis_id'
    ];
}
