<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Diagnostico extends Component
{
    public $user;
    public $diagnostico;

    public $peso;
    public $estatura;
    public $imc;
    public $kcal;
    public $obesidad;

    public function render()
    {
        $this->user = Auth::user();
        
        $this->diagnostico = $this->user->diagnostico->toArray();
        
        if(count($this->diagnostico) > 0)
        {
            $this->imc = $this->diagnostico[0]['imc'];
            $this->kcal = $this->diagnostico[0]['kcal'];
            $this->obesidad = $this->diagnostico[0]['tipo_obesidad'];
        }

        return view('livewire.diagnostico');
    }
}
