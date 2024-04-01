<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class notes extends Model
{
    use HasFactory;

      /**
     * @var array
     */
    protected $fillable = [

       'note_s1',
       'note_s2',
       'moy_A1',

       'note_s3',
       'note_s4',
       'moy_A2',

       'note_s5',
       'note_s6',
       'moy_A3',

       'note_s7',
       'note_s8',
       'moy_A4',

       'note_s9',
       'note_s10',
       'moy_A5',

    ];
}
