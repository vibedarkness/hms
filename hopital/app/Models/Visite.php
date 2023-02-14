<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visite extends Model
{
    use HasFactory;
    protected $fillable=[
        'num_visite',
        'type_visite',
        'date_visite',
        'status_visite',
        'description',
        'patient_id',
        'user_id',
        'created_by_id',
        'updated_by_id'
    ];
}
