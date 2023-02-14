<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeLit extends Model
{
    use HasFactory;
    protected $fillable=[
        'code',
        'name',
        'status',
        'created_by_id',
        'updated_by_id'

    ];
}
