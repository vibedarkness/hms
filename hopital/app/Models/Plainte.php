<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plainte extends Model
{
    use HasFactory;
    protected $fillable=[
        'type_plainte',
        'created_by_id',
        'updated_by_id'
    ];
}
