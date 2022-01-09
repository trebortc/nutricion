<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnostico extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'user_id',
        'imc',
        'kcal',
        'peso',
        'estatura',
        'tipo_obesidad'
    ];
}
