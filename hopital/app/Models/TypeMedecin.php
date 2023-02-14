<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeMedecin extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'status',
        'created_by_id',
        'updated_by_id'
    ];
}
