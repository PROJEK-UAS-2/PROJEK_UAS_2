<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class supir extends Model
{
    use HasFactory;

    protected $table = "Supir";

    protected $fillable = [
        'nama_supir',
        'kode_supir',
        'kontak_1',
        'kontak_2',
        'bis_id'
    ];
}
