<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guardas extends Model
{
    use HasFactory;
    protected $table = 'guardas';
    protected $primaryKey = 'id';
    protected $fillable = [
        'Documento',
        'nombre',
        'apellido',
        'hora_inicio',
        'hora_fin',
        'area'
        
        
    ];
}
