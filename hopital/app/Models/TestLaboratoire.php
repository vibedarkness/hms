<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestLaboratoire extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'prix',
        'pourcentage',
        'stock_sang_id',
        'created_by_id',
        'updated_by_id'

    ];
}
