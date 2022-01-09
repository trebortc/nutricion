<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComidaDiaria extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'desayuno_id',
        'refrigerioam_id',
        'almuerzo_id',
        'refrigeriopm_id',
        'cena_id',
        'usuario_id',
        'fecha',
        'estado',
        'user_id'
    ];
    
}
