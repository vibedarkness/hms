<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    use HasFactory;

    protected $fillable=[
        'dosage',
        'frequence',
        'duree',
        'moment_repas',
        'instruction',
        'route',
    ];
}
