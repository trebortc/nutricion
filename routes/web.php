<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Inicio;
use App\Http\Livewire\Medidas;
use App\Http\Livewire\TipoComidas;
use App\Http\Livewire\Alimentos;
use App\Http\Livewire\Menus;
use App\Http\Livewire\Comidas;
use App\Http\Livewire\Diagnostico;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/inicio', Inicio::class)->name('inicio');
    Route::get('/medidas', Medidas::class)->name('medidas');
    Route::get('/tipo-comidas', TipoComidas::class)->name('tipo-comidas');
    Route::get('/alimentos', Alimentos::class)->name('alimentos');
    Route::get('/menus', Menus::class)->name('menus');
    Route::get('/comidas', Comidas::class)->name('comidas');
    Route::get('/diagnosticos', Diagnostico::class)->name('diagnosticos');
    Route::get('/dashboard', function(){
        return view('dashboard');
    })->name('dashboard');
});
// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

