<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medecin extends Model
{
    use HasFactory;
    protected $fillable=[
        'code_medicament',
        'nom_medicament',
        'prix_medicament',
        'profit_medicament',
        'quantite_disponible',
        'quantite_alert',
        'description',
        'status',
        'achat_id',
        'created_by_id',
        'updated_by_id'
    ];
}
