<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructores extends Model
{
    use HasFactory;



    protected $fillable = [
        'dni',
        'name',
        'surname',
        'genre',
        'date_birth',
        'address',
        'disability',
        'phone',
        'email',
        'city',
        'department',

    ];
}
