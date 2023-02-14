<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockSang extends Model
{
    use HasFactory;
    protected $fillable=[

        'banque_sang_id',
        'created_by_id',
        'updated_by_id'

    ];
}
