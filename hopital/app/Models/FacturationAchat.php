<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacturationAchat extends Model
{
    use HasFactory;
    protected $fillable=[
        'numero_achat',
        'total',
        'montant_en_attente',
        'montant_paiement',
        'note',
        'note_rabais',
        'montant_rabais',
        'tax',
        'frais_supplementaire',
        'mood',
        'status',
        'patient_id',
        'visite_id',
        'ordonnance_docteur_id',
        'created_by_id',
        'updated_by_id'

    ];
}
