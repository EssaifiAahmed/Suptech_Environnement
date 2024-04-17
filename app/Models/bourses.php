<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bourses extends Model
{
    use HasFactory;
   /**
     * @var array
     */
   protected $fillable = [
    'code_inscription',
    'Nom',
    'email',
    'cne',
    'date_naissance',
    'telephone',
    'nom_pere_complet',
    'cin_massar',
    'adresse',
    'profession',
    'nom_mere_complet',
    'profession_mere',
    'nom_tuteur_complet',
    'profession_tuteur',
   ];
}


