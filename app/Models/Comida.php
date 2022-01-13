<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comida extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'tipo_comida_id',
        'descripcion'
    ];

    public function comidaDetalles() 
    {
        return $this->hasMany(ComidaDetalle::class);
    }

    public function tipoComida()
    {
        return $this->belongsTo(TipoComida::class);
    }

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
