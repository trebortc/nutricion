<x-jet-dialog-modal wire:model="modal" maxWidth="2xl">
    <x-slot name="title">
        {{ __('Crear nuevo menú de comida') }}
    </x-slot>
    <x-slot name="content">
        <form>
            <!-- Información para menú -->
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="mb-4">
                    <label for="nombre" class="block text-gray-700 text-sm font-bold mb-2">Nombre:</label>
                    <input type="text" class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nombre" wire:model="nombre">
                </div>
            </div>

            <!-- Información para menú detalle -->
            <div class="card">
                <div class="card-header">
                    Elementos
                </div>

                <div class="card-body">
                    <table class="table-fixed w-full">
                        <thead>
                            <tr>
                                <th>Porción</th>
                                <th>Cantid.</th>
                                <th>Medidas</th>
                                <th>Alimento</th>
                                <th>Preparación</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($menuDetalles as $index => $menuDetalle)
                                <tr>
                                    <td class="border px-5 py-2 text-center">
                                        <input type="number"
                                            class="text-center w-full px-3 border border-gray-300 rounded-l shadow focus:outline-none focus:ring-2 focus:ring-purple-600"
                                            name="menuDetalles[{{$index}}][porcion]"
                                            class="py-2 px-1"
                                            wire:model="menuDetalles.{{$index}}.porcion" />                                    
                                    </td>
                                    <td class="border px-5 py-2 text-center">
                                        <input type="number"
                                            class="text-center w-full px-3 border border-gray-300 rounded-l shadow focus:outline-none focus:ring-2 focus:ring-purple-600"
                                            name="menuDetalles[{{$index}}][cantidad]"
                                            wire:model="menuDetalles.{{$index}}.cantidad" />                                    
                                    </td>
                                    <td class="border px-5 py-2 text-center">                                    
                                        <select name="menuDetalles[{{$index}}][medida_id]"
                                                wire:model="menuDetalles.{{$index}}.medida_id"
                                                class="py-2 px-1">
                                            <option value="" class="text-center">Escoja:</option>
                                            @foreach ($medidas as $medida)
                                                <option value="{{ $medida->id }}" class="text-center">
                                                    {{ $medida->prefijo }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td class="border px-4 py-2 text-center">                                    
                                        <select name="menuDetalles[{{$index}}][alimento_id]"
                                                wire:model="menuDetalles.{{$index}}.alimento_id">
                                            <option value="" class="text-center">Escoja:</option>
                                            @foreach ($alimentos as $alimento)
                                                <option value="{{ $alimento->id }}" class="text-center">
                                                    {{ $alimento->nombre }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td class="border px-4 py-2 text-center">                                    
                                        <select name="menuDetalles[{{$index}}][preparacion]"
                                                wire:model="menuDetalles.{{$index}}.preparacion">
                                            <option value="" class="text-center">Escoja:</option>
                                            @foreach ($preparaciones as $preparacion)
                                                <option value="{{ $preparacion }}" class="text-center">
                                                    {{ $preparacion }}
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

