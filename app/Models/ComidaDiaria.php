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
        'fecha',
        'estado',
        'estado2',
        'estado3',
        'estado4',
        'estado5',
        'user_id'
    ];

    public function desayuno()
    {
        return $this->belongsTo(Comida::class, 'desayuno_id', 'id');
    }

    public function refrigerioAM()
    {
        return $this->belongsTo(Comida::class, 'refrigerioam_id', 'id');
    }

    public function almuerzo()
    {
        return $this->belongsTo(Comida::class, 'almuerzo_id', 'id');
    }

    public function refrigerioPM()
    {
        return $this->belongsTo(Comida::class, 'refrigeriopm_id', 'id');
    }

    public function cena()
    {
        return $this->belongsTo(Comida::class, 'cena_id', 'id');
    }
    
}
