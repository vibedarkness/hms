<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lit extends Model
{
    use HasFactory;

    protected $fillable=[
        'numero_lit',
        'name',
        'price',
        'status',
        'image',
        'type_lit_id',
        'chambre_id',
        'created_by_id',
        'updated_by_id'
    ];
}
