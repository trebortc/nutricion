<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'id',
        'nombre'
    ];

    public function menuDetalles() 
    {
        return $this->hasMany(MenuDetalle::class);
    }
}
