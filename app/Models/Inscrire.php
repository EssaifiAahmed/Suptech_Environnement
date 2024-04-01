<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscrire extends Model
{
    use HasFactory;

    /**
     * @var array
     */
    protected $fillable = [
        'Nom',
        'Prenom',
        'cni',
        'date_naissance',
        'CIN_MASSAR',
        'Email',
        'Tele',
        'Sexe',
        'Filiere',
        'dip',
        'nat',
        'ville',
        'tsrc',
        'fichier_notes',
    ];
}
