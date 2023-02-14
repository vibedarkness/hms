<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    use HasFactory;
    protected $fillable=[
        'date_operation',
        'temps_operation',
        'montant',
        'description',
        'status',
        'operation_type_id',
        'patient_id',
        'user_id',
        'created_by_id',
        'updated_by_id'
    ];
}
