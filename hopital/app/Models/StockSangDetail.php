<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockSangDetail extends Model
{
    use HasFactory;
    protected $fillable=
    [
        'unite',
        'total',
        'balance',
        'stock_sang_id',
        'created_by_id',
        'updated_by_id'

    ];
}
