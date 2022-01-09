<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Alimento;

class Alimentos extends Component
{
    public $alimentos;
    public $tiposAlimentos = [];

    public $alimento_id;
    public $nombre;
    public $tipo;

    public $modal = false;

    public function render()
    {
        $this->alimentos = Alimento::all();
        return view('livewire.alimentos');
    }

    public function crear()
    {
        $this->limpiarCampos();
        $this->tiposAlimentos();
        $this->abrirModal();        
    }

    public function abrirModal()
    {
        $this->modal = true;
    }

    public function cerrarModal(){
        $this->modal = false;
    }

    public function limpiarCampos()
    {
        $this->alimento_id = null;
        $this->nombre = '';
        $this->tipo = '';        
    }

    public function editar($id)
    {
        $alimento = Alimento::findOrFail($id);
        $this->alimento_id = $alimento->id;
        $this->nombre = $alimento->nombre;
        $this->tipo = $alimento->tipo;
        $this->tiposAlimentos();
        $this->abrirModal();
    }

    public function borrar($id)
    {
        Alimento::find($id)->delete();
        session()->flash('message', 'Registro eliminado correctamente');
    }

    public function guardar()
    {
        Alimento::updateOrCreate(['id'=>$this->alimento_id],
            [
                'nombre' => $this->nombre,
                'tipo' => $this->tipo
            ]);
         
         session()->flash('message',
            $this->alimento_id ? '¡Actualización exitosa!' : '¡Alta Exitosa!');
         
         $this->cerrarModal();
         $this->limpiarCampos();
    }

    public function tiposAlimentos()
    {
        $this->tiposAlimentos = array('lacteo/bebida', 'proteina', 'cereal', 'fruta', 'grasa', 'ensalada');
    }
    
}
