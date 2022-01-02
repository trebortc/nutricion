<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Inicio de diagnóstico') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div>
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <!-- Peso -->
                        <div class="col-span-6 sm:col-span-4">
                            <x-jet-label for="name" value="{{ __('Peso(Kg)') }}" />
                            <x-jet-input id="name" type="number" step="0.5" class="mt-1 block w-full" wire:model="peso"/>
                        </div>
                        <!-- Estatura -->
                        <div class="col-span-6 sm:col-span-4">
                            <x-jet-label for="email" value="{{ __('Estatura(m)') }}" />
                            <x-jet-input id="email" type="number" step="0.5" class="mt-1 block w-full" wire:model="estatura" />
                        </div><br>
                        <x-jet-button wire:click.prevent="guardar()">
                            {{ __('Guardar') }}
                        </x-jet-button>
                    </div>
                </div>
                <div>
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div class="col-span-6 sm:col-span-4">
                            <x-jet-label for="imc" value="{{ __('IMC') }}" />
                            <x-jet-input id="imc" type="number" class="mt-1 block w-full" wire:model="imc"/>
                        </div>
                        <!-- Estatura -->
                        <div class="col-span-6 sm:col-span-4">
                            <x-jet-label for="kcal" value="{{ __('KCAL') }}" />
                            <x-jet-input id="kcal" type="number" class="mt-1 block w-full" wire:model="kcal" />
                        </div>
                        <!-- Obesidad -->
                        <div class="col-span-6 sm:col-span-4">
                            <x-jet-label for="obesidad" value="{{ __('Obesidad') }}" />
                            <x-jet-input id="obesidad" type="text" class="mt-1 block w-full" wire:model="obesidad" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>