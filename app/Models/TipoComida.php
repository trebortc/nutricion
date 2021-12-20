<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoComida extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nombre',
        'hora_inicio',
        'hora_fin'
    ];
}
