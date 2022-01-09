<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Diagnostico;
use App\Models\ComidaDiaria;
use App\Models\TipoComida;
use App\Models\Comida;

class Diagnosticos extends Component
{
    public $user;
    public $diagnostico;

    public $peso;
    public $estatura;
    public $imc;
    public $kcal;
    public $obesidad;

    public $bandera = true;

    protected $rules = [
        'peso' => 'required|numeric|between:0,100',
        'estatura' => 'required|numeric|between:0,10',
    ];

    protected $messages = [
        'peso.required' => 'El peso no puede ser vacio.',
        'peso.numeric' => 'El peso debe ser un número.',
        'estatura.required' => 'La estatura no puede ser vacia.',
        'estatura.numeric' => 'La estatura debe ser un número.',
    ];

    public function render()
    {
        $this->user = Auth::user();
        
        $this->diagnostico = $this->user->diagnostico->toArray();
        
        if(count($this->diagnostico) > 0 && $this->bandera)
        {
            $this->imc = $this->diagnostico[0]['imc'];
            $this->kcal = $this->diagnostico[0]['kcal'];
            $this->obesidad = $this->diagnostico[0]['tipo_obesidad'];
            $this->peso = $this->diagnostico[0]['peso'];
            $this->estatura = $this->diagnostico[0]['estatura'];
            $this->bandera = false;
        }

        return view('livewire.diagnostico');
    }

    public function guardar()
    {
        if(!isset($this->peso) && !isset($this->estatura))
        {
            session()->flash('message', 'Ingrese peso y estatura');
            return;
        }
        
        if(!is_numeric($this->peso) && !is_numeric($this->estatura))
        {
            session()->flash('message', 'Ingrese valores validos');
            return;
        }

        $this->validate();

        $this->imc = $this->peso/($this->estatura*$this->estatura);
        $this->imc = number_format($this->imc, 2);

        if($this->imc<18.5){
            $this->obesidad = "Bajo peso";
        }elseif($this->imc>=18.5 && $this->imc<=24.9){
            $this->obesidad = "Normal";
        }elseif($this->imc>=25 && $this->imc<=29.9){
            $this->obesidad = "Sobrepeso";
        }elseif($this->imc>=30 && $this->imc<=34.9){
            $this->obesidad = "Obesidad I";
        }elseif($this->imc>=35 && $this->imc<=39.9){
            $this->obesidad = "Obesidad II";
        }elseif($this->imc>=40 && $resultado<=49.9){    
            $this->obesidad = "Obesidad III";
        }
    
        $diagnostico = Diagnostico::updateOrCreate(['id'=>$this->diagnostico[0]['id']],
        [
            'imc' => $this->imc,
            'kcal' => 0,
            'tipo_obesidad' => $this->obesidad,
            'peso' => $this->peso,
            'estatura' => $this->estatura
        ]);

        session()->flash('message', 'Datos actualizados');

        //Elimino todas las comidas generadas y creo nuevas
        $this->user->comidasDiarias()->delete();    

        $tiposComida = TipoComida::where('clasificacion', '=', $this->obesidad)->get();

        foreach($tiposComida as $tipoComida){
            if(strpos($tipoComida->nombre, 'Desayuno') !== false){
                $desayunos = $this->ObtenerComidas($tipoComida->id);
            }elseif(strpos($tipoComida, 'Refrigerio AM') !== false){
                $refrigeriosAM = $this->ObtenerComidas($tipoComida->id);
            }elseif(strpos($tipoComida, 'Almuerzo') !== false){
                $almuerzos = $this->ObtenerComidas($tipoComida->id);     
            }elseif(strpos($tipoComida, 'Refrigerio PM') !== false){
                $refrigeriosPM = $this->ObtenerComidas($tipoComida->id);
            }elseif(strpos($tipoComida, 'Cena') !== false){
                $cenas = $this->ObtenerComidas($tipoComida->id);
            }
        }

        //Crear la dieta segun los dias requeridos
        for($i=1; $i<10; $i++){
            ComidaDiaria::Create(
                [
                    'desayuno_id' => $desayunos[array_rand($desayunos, 1)]['id'], 
                    'refrigerioam_id' => $refrigeriosAM[array_rand($refrigeriosAM, 1)]['id'],
                    'almuerzo_id' => $almuerzos[array_rand($almuerzos, 1)]['id'],
                    'refrigeriopm_id' => $refrigeriosPM[array_rand($refrigeriosPM, 1)]['id'],
                    'cena_id' => $cenas[array_rand($cenas, 1)]['id'],
                    'user_id' => $this->user->id,
                    'fecha' => now()->modify('+'.$i.' day'),
                    'estado' => 'iniciado',
                ]
            );
        }

        $this->bandera = true;
    }

    public function ObtenerComidas($id){
        return Comida::where('tipo_comida_id', '=', $id)->get()->toArray();
    }
}
