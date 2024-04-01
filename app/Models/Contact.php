<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    /**
     * @var array
     */
    protected $fillable = [
        'Full_Name',
        'email',
        'Tele',
        'sujet',
        'message',
    ];
}
