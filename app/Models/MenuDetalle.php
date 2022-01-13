<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuDetalle extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'menu_id',
        'alimento_id',
        'medida_id',
        'porcion',
        'cantidad',
        'preparacion'
    ];

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }

    public function alimento()
    {
        return $this->belongsTo(Alimento::class);
    }

    public function medida()
    {
        return $this->belongsTo( Medida::class);
    }

}
