<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacturationTransaction extends Model
{
    use HasFactory;

    protected $fillable=[
        'montant_paiement',
        'mood',
        'status',
        'visite_id',
        'facturation_achat_id',
        'created_by_id',
        'updated_by_id'


    ];
}
