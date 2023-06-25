<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipeBis extends Model
{
    use HasFactory;

    protected $table = "Tipebis";

    protected $fillable = [
        'tipe'
    ];
}
