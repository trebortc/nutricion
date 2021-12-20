<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Menu;
use App\Models\Alimento;
use App\Models\Medida;
use App\Models\MenuDetalle;

class Menus extends Component
{
    public $menus;
    public $menuDetalle;

    //Datos menú
    public $menu_id;
    public $nombre;
    public $menuDetalles = [];
    
    public $alimentos = [];
    public $medidas = [];
    public $preparaciones = [];

    //Datos para modales
    public $modal = false;

    public function render()
    {
        $this->menus = Menu::all();
        return view('livewire.menus');
    }

    /**
     * Opciones para menú
     */

    public function crear()
    {
        $this->limpiarCampos();
        $this->abrirModal();        
    }

    public function abrirModal()
    {
        $this->modal = true; 
        $this->alimentos = Alimento::all();
        $this->medidas = Medida::all();
        $this->preparaciones = ['cocida', 'vapor', 'normal'];
    }

    public function cerrarModal(){
        $this->modal = false;
    }

    public function limpiarCampos()
    {
        $this->menu_id = null;
        $this->nombre = '';  
        $this->alimentos = [];
        $this->medidas = [];
        $this->preparaciones = [];
        $this->menuDetalles = [];
    }

    public function editar($id)
    {
        $menu = Menu::findOrFail($id);
        $this->menu_id = $menu->id;
        $this->nombre = $menu->nombre;
        $this->abrirModal();
    }

    public function borrar($id)
    {
        Menu::find($id)->delete();
        session()->flash('message', 'Registro eliminado correctamente');
    }

    public function guardar()
    {
        $menu = Menu::updateOrCreate(['id'=>$this->menu_id],
            [
                'nombre' => $this->nombre,
            ]);
        
        $menu->menuDetalles()->delete();
        //$menu->menuDetalles()->saveMany($this->menuDetalles);
            
        foreach ($this->menuDetalles as $detalle) 
        {
            MenuDetalle::create([
                'menu_id' => $menu->id,   
                'alimento_id' => $detalle['alimento_id'],
                'medida_id' => $detalle['medida_id'],
                'porcion' => $detalle['porcion'],
                'cantidad' => $detalle['cantidad'],
                'preparacion' => $detalle['preparacion'],
            ]);
        }
            

        session()->flash('message',
            $this->menu_id ? '¡Actualización exitosa!' : '¡Alta Exitosa!');
         
         $this->cerrarModal();
         $this->limpiarCampos();
    }

    public function agregarDetalle()
    {
        $this->menuDetalles[] = ['alimento_id' => '', 'medida_id' => '', 'porcion' => 1, 'cantidad' => 1, 'preparacion' => ''];
    }

    public function eliminarDetalle($index)
    {
        unset($this->menuDetalles[$index]);
        $this->menuDetalles = array_values($this->menuDetalles);
    }

    /**
     * Fin opciones para menú
     */
}
