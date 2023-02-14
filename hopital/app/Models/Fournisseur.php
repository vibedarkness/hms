<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fournisseur extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'email',
        'phone',
        'adresse',
        'Entreprise',
        'produit',
        'description',
        'status',
        'created_by_id',
        'updated_by_id'
    ];
}
