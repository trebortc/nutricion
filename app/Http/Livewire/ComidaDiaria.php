<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\ComidaDiaria as ComidaDiariaDato;

class ComidaDiaria extends Component
{
    public $comidasDiarias;
    public function render()
    {
        $this->user = Auth::user();
        $this->comidasDiarias = $this->user->comidasDiarias()->where('fecha', '=', date('Y-m-d'))->get();
        
        return view('livewire.comida-diaria');
    }

    public function editar($id, $comida)
    {
        switch($comida){
            case 1:
                ComidaDiariaDato::updateOrCreate(['id'=>$id],
                [
                    'estado' => 'finalizado',
                ]);
                $this->mensaje($comida);    
                break;
            case 2:
                ComidaDiariaDato::updateOrCreate(['id'=>$id],
                [
                    'estado2' => 'finalizado',
                ]);
                $this->mensaje($comida);
                break;
            case 3:
                ComidaDiariaDato::updateOrCreate(['id'=>$id],
                [
                    'estado3' => 'finalizado',
                ]);
                $this->mensaje($comida);
                break;
            case 4:
                ComidaDiariaDato::updateOrCreate(['id'=>$id],
                [
                    'estado4' => 'finalizado',
                ]);
                $this->mensaje($comida);
                break;
            case 5:
                ComidaDiariaDato::updateOrCreate(['id'=>$id],
                [
                    'estado' => 'finalizado',
                ]);
                $this->mensaje($comida);
                break;
        }       
    }

    public function mensaje($comida)
    {
        $mensaje = '';
        switch($comida){
            case 1:
                $mensaje = 'Usted realizo seguimiento a su desayuno';
                break;
            case 2:
                $mensaje = 'Usted realizo seguimiento a su refrigerio AM';
                break;
            case 3:
                $mensaje = 'Usted realizo seguimiento a su almuerzo';
                break;
            case 4:
                $mensaje = 'Usted realizo seguimiento a su refrigerio PM';
                break;
            case 5:
                $mensaje = 'Usted realizo seguimiento a su cena';
                break;
        }

        session()->flash('message', $mensaje);
    }
}
