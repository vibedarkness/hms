<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infirmier extends Model
{
    use HasFactory;

    protected $fillable=[
        'ap_infirmier',
        'experience',
        'user_id',
        'specialite_id',
        'created_by_id',
        'updated_by_id'
    ];
}
