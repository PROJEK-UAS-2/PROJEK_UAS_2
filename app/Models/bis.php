<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bis extends Model
{
    use HasFactory;

    protected $table = "Bis";

    protected $fillable = [
        'nama',
        'kode',
        'nomor_polisi',
        'jumlah_unit',
        'jurusan',
        'tipe_bis_id'
    ];
}
