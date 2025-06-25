<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Horario extends Model
{
    use HasFactory;

    protected $fillable = [
        'dia',
        'hora_inicio',
        'hora_fin',
        'actividad',
        'usuario_id',
    ];

    // ✅ Agrega esta función para la relación con el usuario
    public function usuario()
    {
        return $this->belongsTo(User::class);
    }
}

