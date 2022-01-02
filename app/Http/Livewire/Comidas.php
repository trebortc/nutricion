<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Comida;
use App\Models\Menu;
use App\Models\TipoComida;
use App\Models\ComidaDetalle;

class Comidas extends Component
{
    public $comidas;

    //Datos
    public $comida_id;
    public $tipoComida;
    public $descripcion;
    public $comidaDetalles = [];
    public $tiposComidas = [];

    //Listas
    public $menus = [];

    //Datos para modales
    public $modal = false;

    public function render()
    {
        $this->comidas = Comida::all();
        return view('livewire.comidas');
    }

     /**
     * Opciones para Comida
     */

    public function crear()
    {
        $this->limpiarCampos();
        $this->abrirModal();        
    }

    public function abrirModal()
    {
        $this->modal = true;
        $this->menus = Menu::all();
        $this->tiposComidas = TipoComida::all();
    }

    public function cerrarModal(){
        $this->modal = false;
        $this->limpiarCampos();
    }

    public function limpiarCampos()
    {
        $this->comida_id = null;
        $this->tipoComida = '';
        $this->descripcion = '';  
        $this->comidaDetalles = [];
        $this->menus = [];
        $this->tiposComidas = [];
    }

    public function editar($id)
    {
        $comida = Comida::findOrFail($id);
        $this->comida_id = $comida->id;
        $this->tipoComida = $comida->tipo_comida_id;
        $this->descripcion = $comida->descripcion;
        $this->comidaDetalles = $comida->comidaDetalles->toArray();
        $this->abrirModal();
    }

    public function borrar($id)
    {
        $comida = Comida::find($id);
        $comida->comidaDetalles()->delete();
        $comida->delete();
        session()->flash('message', 'Registro eliminado correctamente');
    }

    public function guardar()
    {
        $comida = Comida::updateOrCreate(['id'=>$this->comida_id],
            [
                'tipo_comida_id' => $this->tipoComida,
                'descripcion' => $this->descripcion
            ]);
        
        $comida->comidaDetalles()->delete();    
            
        foreach ($this->comidaDetalles as $detalle) 
        {
            ComidaDetalle::create([
                'comida_id' => $comida->id,   
                'menu_id' => $detalle['menu_id'],
            ]);
        }
            
        session()->flash('message',
            $this->comida_id ? '¡Actualización exitosa!' : '¡Alta Exitosa!');
         
         $this->cerrarModal();
         $this->limpiarCampos();
    }

    public function agregarDetalle()
    {
        $this->comidaDetalles[] = ['menu_id' => ''];
    }

    public function eliminarDetalle($index)
    {
        unset($this->comidaDetalles[$index]);
        $this->comidaDetalles = array_values($this->comidaDetalles);
    }

    /**
     * Fin opciones para comida
     */
}
