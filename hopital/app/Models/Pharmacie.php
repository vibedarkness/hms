<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pharmacie extends Model
{
    use HasFactory;

    protected $fillable=[
        'code',
        'name',
        'email',
        'phone',
        'adresse',
        'status',
        'branche_id',
        'updated_by_id',
        'created_by_id'
    ];
}
