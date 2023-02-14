<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable=[
        'num_registre',
        'date_registre',
        'reference',
        'refere_par',
        'experience',
        'type_patient',
        'title',
        'name',
        'date_naissance',
        'age',
        'genre',
        'situation_matrimoniale',
        'email',
        'groupe_sanguin',
        'phone',
        'religion',
        'fonction',
        'pays',
        'adresse',
        'nom_du_pere',
        'nom_de_la_mere',
        'mode_paiement',
        'symptômes',
        'image',
        'user_id',
        'created_by_id',
        'updated_by_id'


    ];

}
