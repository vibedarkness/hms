<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdonnanceDocteur extends Model
{
    use HasFactory;

    protected $fillable=[
        'num_ordonnance',
        'type_ordonnance',
        'status',
        'visite_id',
        'user_id',
        'approuved_by_id',
        'created_by_id',
        'updated_by_id'

    ];
}
