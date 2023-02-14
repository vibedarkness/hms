<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Immunisation extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'patient_id',
        'visite_id',
        'user_id',
        'created_by_id',
        'updated_by_id'
    ];
}
