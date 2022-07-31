<?php

use App\Http\Controllers\CuestionarioController;
use App\Http\Controllers\EstadisticaController;
use App\Http\Controllers\RetoController;
use Illuminate\Support\Facades\Route;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('cuestionarios/{cuestionario}',[CuestionarioController::class, 'show'])->name('cuestionarios.show');
    Route::get('cuestionarios',[CuestionarioController::class, 'resultado'])->name('cuestionarios.resultado');
    Route::post('cuestionarios/{cuestionario}',[CuestionarioController::class, 'submit'])->name('cuestionarios.submit');

    Route::controller(RetoController::class)->group(function(){
        Route::get('retos', 'index')->name('retos.index');
        Route::get('retos/create',  'create')->name('retos.create');
        Route::post('retos', 'store')->name('retos.store');
        Route::get('retos/{reto}', 'show')->name('retos.show');
        Route::get('retos/{reto}/edit', 'edit')->name('retos.edit');
        Route::put('retos/{reto}', 'update')->name('retos.update');
        Route::delete('retos/{reto}', 'destroy')->name('retos.destroy');
    });

    Route::get('/estadisticas',[EstadisticaController::class, 'show'])->name('estadisticas');
    Route::post('/estadisticas',[EstadisticaController::class, 'destroy'])->name('estadisticas.destroy');
});


