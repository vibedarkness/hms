<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programme extends Model
{
    use HasFactory;
    protected $fillable=[
        'temps_debut',
        'temps_fin',
        'status',
        'jour_disponible',
        'note',
        'user_id',
        'created_by_id',
        'updated_by_id'

    ];
}
