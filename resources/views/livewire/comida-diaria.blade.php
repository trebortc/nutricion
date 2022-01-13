<div>
    <x-slot name="header">
        <h1 class="text-gray-900">Comida del día</h1>
    </x-slot>

    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
                @if(session()->has('message'))
                    <div class="bg-teal-100 rounded-b text-teal-900 px-4 py-4 shadow-md my-3" role="alert">
                        <div class="flex">
                            <div>
                                <h4>{{ session('message')}}</h4>
                            </div>
                        </div>
                    </div>
                @endif
                <!-- <x-jet-secondary-button wire:click="crear()" class="mt-7 mb-7" wire:loading.attr="disabled">
                    {{ __('Nuevo') }}
                </x-jet-secondary-button> -->
            </div>
        </div>
    </div>

    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
                <table class="table-fixed w-full">
                    <thead>
                        <tr class="bg-gray-50 text-black">
                            <th>Comida</th>
                            <th>Menu</th>
                            <th>Medida</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($comidasDiarias as $comidaDiaria)
                            <tr>
                                <td class="border px-5 py-2 text-center" colspan="3"><b>Inicio de día {{ $comidaDiaria->fecha }}</b></td>
                            </tr>
                            @if($comidaDiaria->estado == 'iniciado')
                                <tr>
                                    <td class="border px-5 py-2 text-center">
                                        <b>{{ $comidaDiaria->desayuno->descripcion }}</b> <!--- {{ $comidaDiaria->estado }}                                                     -->
                                    </td>
                                    <td>
                                        <x-jet-button class="ml-2"
                                                    wire:click.prevent="editar({{$comidaDiaria->id}}, 1)"
                                                    wire:loading.attr="disabled">
                                            {{ __('Listo desayuno') }}
                                        </x-jet-button>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>                        
                                @foreach($comidaDiaria->desayuno->comidaDetalles as $menu)
                                <tr>
                                    <td class="border px-1 py-2"></td>                            
                                    <td class="border px-2 py-2">{{$menu->menu->nombre}}</td>
                                    <td class="border px-3 py-2">
                                        @foreach($menu->menu->menuDetalles as $alimento)
                                            {{ $alimento->porcion }} (P) - &nbsp;        
                                            {{ $alimento->cantidad }}&nbsp;
                                            {{ $alimento->medida->prefijo }}&nbsp;        
                                            {{ $alimento->alimento->nombre }}&nbsp;
                                            <br>                                                                    
                                        @endforeach
                                    </td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td>&nbsp;</td>
                                </tr>
                            @endif
                            <!-- refigrerio am-->
                            @if($comidaDiaria->estado2 == 'iniciado')
                                <tr>
                                    <td class="border px-5 py-2 text-center">
                                        <b>{{ $comidaDiaria->refrigerioAM->descripcion }}</b> <!--- {{ $comidaDiaria->estado }}                                                     -->
                                    </td>
                                    <td>
                                        <x-jet-button class="ml-2"
                                                    wire:click.prevent="editar({{$comidaDiaria->id}}, 2)"
                                                    wire:loading.attr="disabled">
                                            {{ __('Listo refrigerio AM') }}
                                        </x-jet-button>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>                                
                                @foreach($comidaDiaria->refrigerioAM->comidaDetalles as $menu)
                                <tr>
                                    <td class="border px-1 py-2"></td>                            
                                    <td class="border px-2 py-2">{{$menu->menu->nombre}}</td>
                                    <td class="border px-3 py-2">
                                        @foreach($menu->menu->menuDetalles as $alimento)
                                            {{ $alimento->porcion }} (P) - &nbsp;        
                                            {{ $alimento->cantidad }}&nbsp;
                                            {{ $alimento->medida->prefijo }}&nbsp;        
                                            {{ $alimento->alimento->nombre }}&nbsp;
                                            <br>                                                                    
                                        @endforeach
                                    </td>
                                </tr>
                                @endforeach                        
                                <tr>
                                    <td>&nbsp;</td>
                                </tr>
                            @endif
                            <!-- almuerzo -->
                            @if($comidaDiaria->estado3 == 'iniciado')
                                <tr>
                                    <td class="border px-5 py-2 text-center">
                                        <b>{{ $comidaDiaria->almuerzo->descripcion }}</b> <!--- {{ $comidaDiaria->estado }}                                                     -->
                                    </td>
                                    <td>
                                        <x-jet-button class="ml-2"
                                                    wire:click.prevent="editar({{$comidaDiaria->id}}, 3)"
                                                    wire:loading.attr="disabled">
                                            {{ __('Listo almuerzo') }}
                                        </x-jet-button>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>                                
                                @foreach($comidaDiaria->almuerzo->comidaDetalles as $menu)
                                <tr>
                                    <td class="border px-1 py-2"></td>                            
                                    <td class="border px-2 py-2">{{$menu->menu->nombre}}</td>
                                    <td class="border px-3 py-2">
                                        @foreach($menu->menu->menuDetalles as $alimento)
                                            {{ $alimento->porcion }} (P) - &nbsp;        
                                            {{ $alimento->cantidad }}&nbsp;
                                            {{ $alimento->medida->prefijo }}&nbsp;        
                                            {{ $alimento->alimento->nombre }}&nbsp;
                                            <br>                                                                    
                                        @endforeach
                                    </td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td>&nbsp;</td>
                                </tr>
                            @endif
                            <!-- refrigerio PM -->
                            @if($comidaDiaria->estado4 == 'iniciado')
                                <tr>
                                    <td class="border px-5 py-2 text-center">
                                        <b>{{ $comidaDiaria->refrigerioPM->descripcion }}</b> <!--- {{ $comidaDiaria->estado }}                                                     -->
                                    </td>
                                    <td>
                                        <x-jet-button class="ml-2"
                                                    wire:click.prevent="editar({{$comidaDiaria->id}}, 4)"
                                                    wire:loading.attr="disabled">
                                            {{ __('Listo refrigerio PM') }}
                                        </x-jet-button>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>                                
                                @foreach($comidaDiaria->refrigerioPM->comidaDetalles as $menu)
                                <tr>
                                    <td class="border px-1 py-2"></td>                            
                                    <td class="border px-2 py-2">{{$menu->menu->nombre}}</td>
                                    <td class="border px-3 py-2">
                                        @foreach($menu->menu->menuDetalles as $alimento)
                                            {{ $alimento->porcion }} (P) - &nbsp;        
                                            {{ $alimento->cantidad }}&nbsp;
                                            {{ $alimento->medida->prefijo }}&nbsp;        
                                            {{ $alimento->alimento->nombre }}&nbsp;
                                            <br>                                                                    
                                        @endforeach
                                    </td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td>&nbsp;</td>
                                </tr>
                            @endif
                            <!-- cena -->
                            @if($comidaDiaria->estado5 == 'iniciado')
                                <tr>
                                    <td class="border px-5 py-2 text-center">
                                        <b>{{ $comidaDiaria->cena->descripcion }}</b> <!--- {{ $comidaDiaria->estado }}                                                     -->
                                    </td>
                                    <td>
                                        <x-jet-button class="ml-2"
                                                    wire:click.prevent="editar({{$comidaDiaria->id}}, 5)"
                                                    wire:loading.attr="disabled">
                                            {{ __('Listo cena') }}
                                        </x-jet-button>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>                                
                                @foreach($comidaDiaria->cena->comidaDetalles as $menu)
                                <tr>
                                    <td class="border px-1 py-2"></td>                            
                                    <td class="border px-2 py-2">{{$menu->menu->nombre}}</td>
                                    <td class="border px-3 py-2">
                                        @foreach($menu->menu->menuDetalles as $alimento)
                                            {{ $alimento->porcion }} (P) - &nbsp;        
                                            {{ $alimento->cantidad }}&nbsp;
                                            {{ $alimento->medida->prefijo }}&nbsp;        
                                            {{ $alimento->alimento->nombre }}&nbsp;
                                            <br>                                                                    
                                        @endforeach
                                    </td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td class="border px-5 py-2 text-center" colspan="3">Fin de día {{ $comidaDiaria->fecha }} </td>                    
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

