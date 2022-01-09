<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\TipoComida;

class TipoComidas extends Component
{
    public $tipoComidas;

    public $tipoComida_id;
    public $nombre;
    public $horaInicio;
    public $horaFin;
    public $clasificacion;

    public $tiposSobrePeso = [];

    public $modal = false;

    public function render()
    {
        $this->tipoComidas = TipoComida::all();
        return view('livewire.tipo-comidas');
    }

    public function crear()
    {
        $this->limpiarCampos();
        $this->tiposSobrePeso();
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
        $this->tipoComida_id = null;
        $this->nombre = '';
        $this->horaInicio = '';
        $this->horaFin = ''; 
        $this->clasificacion = '';       
    }

    public function editar($id)
    {
        $tipoComida = TipoComida::findOrFail($id);
        $this->tipoComida_id = $tipoComida->id;
        $this->nombre = $tipoComida->nombre;
        $this->horaInicio = $tipoComida->hora_inicio;
        $this->horaFin = $tipoComida->hora_fin;
        $this->clasificacion = $tipoComida->clasificacion;
        $this->tiposSobrePeso();
        $this->abrirModal();
    }

    public function borrar($id)
    {
        TipoComida::find($id)->delete();
        session()->flash('message', 'Registro eliminado correctamente');
    }

    public function guardar()
    {
        TipoComida::updateOrCreate(['id'=>$this->tipoComida_id],
            [
                'nombre' => $this->nombre,
                'hora_inicio' => $this->horaInicio,
                'hora_fin' => $this->horaFin,
                'clasificacion' => $this->clasificacion
            ]);
         
         session()->flash('message',
            $this->tipoComida_id ? '¡Actualización exitosa!' : '¡Alta Exitosa!');
         
         $this->cerrarModal();
         $this->limpiarCampos();
    }

    public function tiposSobrePeso()
    {
        $this->tiposSobrePeso = array('Bajo peso','Normal','Sobrepeso', 'Obesidad I', 'Obesidad II', 'Obesidad III', 'Obesidad IV');
    }
}

