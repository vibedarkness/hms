<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacturationAchatDetail extends Model
{
    use HasFactory;

    protected $fillable=[
        'montant_article',
        'montant_total_article',
        'facturation_achat_id',
        'created_by_id',
        'updated_by_id'
        
    ];

}
