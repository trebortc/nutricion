<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Inicio') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @if(Auth::user()->name == 'administrador')
                <section id="hero" class="d-flex align-items-center">
                    <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-lg-7 offset-lg-3">
                            <br>
                            <h1>&nbsp;&nbsp;&nbsp; <b>Bienvenido a NutriFit-Ejercito</b></h1><br>
                            <h2>&nbsp;&nbsp;&nbsp; Somos un grupo de camaradas preocupados por la buena alimentación y salud del compañero</h2>
                            </br>
                        </div>                        
                    </div>     
                    </div>
                </section><!-- End Hero -->
                @else
                  @livewire('diagnosticos')
                @endif

            </div>
        </div>
    </div>
</x-app-layout>