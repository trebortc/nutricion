<x-jet-dialog-modal wire:model="modal" maxWidth="2xl">
    <x-slot name="title">
        {{ __('Crear nuevo menú de comida') }}
    </x-slot>
    <x-slot name="content">
        <form>
            @if(count($tiposComidas) > 0)
                <div class="bg-white px-4">
                    <div class="mb-4">
                        <!-- <label class="inline-block w-32 font-bold">Tipo comida:</label> -->
                        <label for="tipoComida" class="block text-gray-700 text-sm font-bold mb-2">Tipo Comida:</label>
                        <select name="tipoComida" wire:model="tipoComida" 
                            class="w-full leading-tight bg-white border border-gray-400 rounded shadow appearance-none hover:border-gray-500 focus:outline-none focus:shadow-outline">
                            <option value="">Comida:</option>
                            @foreach($tiposComidas as $tipoComida)
                                <option value="{{ $tipoComida->id }}">{{ $tipoComida->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            @endif

            <!-- Información para menú -->
            <div class="bg-white px-4">
                <div class="mb-4">
                    <label for="descripcion" class="block text-gray-700 text-sm font-bold mb-2">Descripción:</label>
                    <input type="text" class="w-full shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="descripcion" wire:model="descripcion">
                </div>
            </div>
            
            <!-- Información para menú detalle -->
            <div class="card">
                <div class="card-header">
                    Conformación de la comida
                </div>

                <div class="card-body">
                    <table class="table-fixed w-full">
                        <thead>
                            <tr>
                                <th>Menu               </th>                            
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($comidaDetalles as $index => $comidaDetalle)
                                <tr>
                                    <td class="border px-1 py-2 text-center">                                    
                                        <select name="comidaDetalles[{{$index}}][menu_id]"
                                                wire:model="comidaDetalles.{{$index}}.menu_id"
                                                class="w-full leading-tight bg-white border border-gray-400 rounded shadow appearance-none hover:border-gray-500 focus:outline-none focus:shadow-outline">
                                            <option value="" class="text-center">Escoja:</option>
                                            @foreach ($menus as $menu)
                                                <option value="{{ $menu->id }}" class="text-center">
                                                    {{ $menu->nombre }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>                                    
                                    <td class="border px-4 py-2 text-center">
                                        <a href="#" wire:click.prevent="eliminarDetalle({{$index}})">Eliminar</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <br>
                    <x-jet-button class="ml-2"
                                wire:click.prevent="agregarDetalle()"
                                wire:loading.attr="disabled">
                        {{ __('Agregar detalle') }}
                    </x-jet-button>
                </div>
            </div>
        </form>
    </x-slot>

    <x-slot name="footer">
        <x-jet-secondary-button wire:click.prevent="guardar()">
            {{ __('Guardar') }}
        </x-jet-secondary-button>

        <x-jet-button class="ml-2"
                    wire:click="cerrarModal()"
                    wire:loading.attr="disabled">
            {{ __('Cancelar') }}
        </x-jet-button>
    </x-slot>
</x-jet-dialog-modal>

