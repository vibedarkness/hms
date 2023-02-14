<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investigation extends Model
{
    use HasFactory;

    protected $fillable=[
        'statistique',
        'ot_requise',
        'resultat',
        'status',
        'test_type_id',
        'patient_id',
        'visite_id',
        'user_id',
        'created_by_id',
        'updated_by_id'
    ];
}
