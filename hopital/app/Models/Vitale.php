<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vitale extends Model
{
    use HasFactory;

    protected $fillable = [
        'systolic_B_P',
        'diastolic_B_P',
        'temperature',
        'weight',
        'height',
        'bmi',
        'respiration',
        'rythme_cardiaque',
        'débit_urinaire',
        'glycémie_f',
        'glycémie_r',
        'spo_2',
        'avpu',
        'traumatisme',
        'mobilite',
        'supplement_oxygene',
        'commentaire',
        'patient_id',
        'visite_id',
        'user_id',
        'created_by_id',
        'updated_by_id'

    ];
}
