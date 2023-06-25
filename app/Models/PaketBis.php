<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketBis extends Model
{
    use HasFactory;

    protected $table = "Paketbis";

    protected $fillable = [
        'bis_id',
        'harga_tiket'
    ];
}
