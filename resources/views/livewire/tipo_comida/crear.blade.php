<x-jet-dialog-modal wire:model="modal" maxWidth="2xl">
    <x-slot name="title">
        {{ __('Crear nuevo tipo de comida') }}
    </x-slot>
    <x-slot name="content">
        <form>
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="mb-4">
                    <label for="nombre" class="block text-gray-700 text-sm font-bold mb-2">Nombre:</label>
                    <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nombre" wire:model="nombre">
                </div>

                <div class="mb-4">
                    <label for="horaInicio" class="block text-gray-700 text-sm font-bold mb-2">Hora inicio:</label>
                    <input type="time" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="horaInicio" wire:model="horaInicio">
                </div>

                <div class="mb-4">
                    <label for="horaFin" class="block text-gray-700 text-sm font-bold mb-2">Hora fin:</label>
                    <input type="time" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="horaFin" wire:model="horaFin">
                </div>

                @if(count($tiposSobrePeso) > 0)
                    <div class="mb-4">
                        <label class="inline-block w-32 font-bold">Tipo sobre peso:</label>
                        <select name="clasificacion" wire:model="clasificacion" 
                            class="w-full leading-tight bg-white border border-gray-400 rounded shadow appearance-none hover:border-gray-500 focus:outline-none focus:shadow-outline">
                            <option value="">Tipo sobre peso:</option>
                            @foreach($tiposSobrePeso as $tipoSobrePeso)
                                <option value="{{ $tipoSobrePeso }}">{{ $tipoSobrePeso }}</option>
                            @endforeach
                        </select>
                    </div>
                @endif
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

