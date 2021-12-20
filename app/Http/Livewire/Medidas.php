<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Medida;

class Medidas extends Component
{
    public $medidas;

    public $medida_id;
    public $nombre;
    public $prefijo;

    public $modal = false;

    public function render()
    {
        $this->medidas = Medida::all();
        return view('livewire.medidas');
    }

    public function crear()
    {
        $this->limpiarCampos();
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
        $this->medida_id = null;
        $this->nombre = '';
        $this->prefijo = '';        
    }

    public function editar($id)
    {
        $medida = Medida::findOrFail($id);
        $this->medida_id = $medida->id;
        $this->nombre = $medida->nombre;
        $this->prefijo = $medida->prefijo;
        $this->abrirModal();
    }

    public function borrar($id)
    {
        Medida::find($id)->delete();
        session()->flash('message', 'Registro eliminado correctamente');
    }

    public function guardar()
    {
        Medida::updateOrCreate(['id'=>$this->medida_id],
            [
                'nombre' => $this->nombre,
                'prefijo' => $this->prefijo
            ]);
         
         session()->flash('message',
            $this->medida_id ? '¡Actualización exitosa!' : '¡Alta Exitosa!');
         
         $this->cerrarModal();
         $this->limpiarCampos();
    }
}
