<div>
    <x-slot name="header">
        <h1 class="text-gray-900">Inicio de diagnostico</h1>
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
            </div>
        </div>
    </div>

    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-8 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div>
                    <div class="bg-white px-4 pt-5 pb-2 sm:p-6 sm:pb-4">
                        <!-- Peso -->
                        <div class="col-span-6 sm:col-span-4">
                            <x-jet-label for="peso" value="{{ __('Peso(Kg)') }}" />
                            <x-jet-input id="peso" type="number" step="0.5" class="mt-1 block" wire:model="peso"/>
                            @error('peso') <span class="error">{{ $message }}</span> @enderror
                            <!-- <x-jet-input id="name" type="number" step="0.5" class="mt-1 block w-full" wire:model="pesoTemp"/> -->
                        </div>
                        <!-- Estatura -->
                        <div class="col-span-6 sm:col-span-4">
                            <x-jet-label for="estatura" value="{{ __('Estatura(m)') }}" />
                            <x-jet-input id="estatura" type="number" step="0.5" class="mt-1 block" wire:model="estatura" />
                            @error('estatura') <span class="error">{{ $message }}</span> @enderror
                            <!-- <x-jet-input id="email" type="number" step="0.5" class="mt-1 block w-full" wire:model="estatura" /> -->
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
                            <x-jet-input id="imc" type="number" class="mt-1 block" wire:model="imc"/>
                        </div>
                        <!-- Estatura -->
                        <!-- <div class="col-span-6 sm:col-span-4">
                            <x-jet-label for="kcal" value="{{ __('KCAL') }}" />
                            <x-jet-input id="kcal" type="number" class="mt-1 blockw-full" wire:model="kcal" />
                        </div> -->
                        <!-- Obesidad -->
                        <div class="col-span-6 sm:col-span-4">
                            <x-jet-label for="obesidad" value="{{ __('Obesidad') }}" />
                            <x-jet-input id="obesidad" type="text" class="mt-1 block" wire:model="obesidad" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>