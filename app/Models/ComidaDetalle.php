<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComidaDetalle extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'id',
        'comida_id',
        'menu_id'
    ];

    public function comida()
    {
        return $this->belongsTo(Comida::class);
    }
}
