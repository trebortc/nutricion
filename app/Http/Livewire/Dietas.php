<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Auth;

use Livewire\Component;
use App\Models\ComidaDiaria;
use App\Models\Comida;
use App\Models\ComidaDetalle;
use App\Models\Menu;
use App\Models\MenuDetalle;
use App\Models\Alimento;

class Dietas extends Component
{
    public $user;
    public $comidasDiarias;

    public function render()
    {
        $this->user = Auth::user();
        $this->comidasDiarias = $this->user->comidasDiarias()->get();
        // $comidaDiariaTemp = ComidaDiaria::where('user_id', '=', $this->user->id)->with('desayuno','refrigerioAM','almuerzo','refrigerioPM','cena')->get();
        // // dd($comidaDiariaTemp);
        // // dd($this->comidasDiarias->first()->desayuno->comidaDetalles->first()->menu->menuDetalles->first()->alimento->nombre);
        // foreach($comidaDiariaTemp as $comida){
        //     // dd($comida->desayuno);
        //     foreach($comida->desayuno as $desayuno){
        //         // dd($desayuno);
        //     }
        // }        
        return view('livewire.dietas');
    }
}
