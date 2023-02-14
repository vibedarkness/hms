<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestType extends Model
{
    use HasFactory;

    protected $fillable=[
    'name',
    'prix',
    'rabaisse',
    'created_by_id',
    'updated_by_id'
    ];

}
