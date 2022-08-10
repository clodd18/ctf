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
        Route::get('retos/categoria/{cuestionario}', 'categoria')->name('retos.categoria');
        Route::post('retos/{reto}', 'resolver')->name('retos.resolver');
    });

    Route::get('/estadisticas',[EstadisticaController::class, 'show'])->name('estadisticas');
    Route::post('/estadisticas',[EstadisticaController::class, 'destroy'])->name('estadisticas.destroy');

    //rutas de los retos
    Route::get('retos/sqli/reto1', function () {return view('retos/sqli/reto1');})->name('retos.sqli.reto1');
    Route::get('retos/sqli/reto2', function () {return view('retos/sqli/reto2');})->name('retos.sqli.reto2');
    Route::post('retos/sqli/reto2', function () {return view('retos/sqli/reto2');})->name('retos.sqli.reto2');
    Route::get('retos/sqli/reto3', function () {return view('retos/sqli/reto3');})->name('retos.sqli.reto3');
    Route::post('retos/sqli/reto3', function () {return view('retos/sqli/reto3');})->name('retos.sqli.reto3');
    Route::get('retos/sqli/reto4', function () {return view('retos/sqli/reto4');})->name('retos.sqli.reto4');
    Route::post('retos/sqli/reto4', function () {return view('retos/sqli/reto4');})->name('retos.sqli.reto4');

    Route::get('retos/comandos/reto1', function () {return view('retos/comandos/reto1');})->name('retos.comandos.reto1');
    Route::get('retos/comandos/reto2', function () {return view('retos/comandos/reto2');})->name('retos.comandos.reto2');
    Route::post('retos/comandos/reto2', function () {return view('retos/comandos/reto2');})->name('retos.comandos.reto2');

    Route::get('retos/codigo/reto1', function () {return view('retos/codigo/reto1');})->name('retos.codigo.reto1');
    Route::get('retos/codigo/reto2', function () {return view('retos/codigo/reto2');})->name('retos.codigo.reto2');
    Route::post('retos/codigo/reto2', function () {return view('retos/codigo/reto2');})->name('retos.codigo.reto2');

    Route::get('retos/xss/reto1', function () {return view('retos/xss/reto1');})->name('retos.xss.reto1');
    Route::get('retos/xss/reto2', [RetoController::class, 'mensaje'])->name('retos.xss.reto2');
    Route::post('retos/xss/reto2', [RetoController::class, 'mensaje'])->name('retos.xss.reto2');
    Route::get('retos/xss/reto3', [RetoController::class, 'mensaje2'])->name('retos.xss.reto3');
    Route::post('retos/xss/reto3', [RetoController::class, 'mensaje2'])->name('retos.xss.reto3');

    Route::get('retos/csrf/reto1', [RetoController::class, 'cambiarPass'])->name('retos.csrf.reto1');

});


Route::get('retos/fuerzabruta/index', function () {return view('retos/fuerzabruta/index');})->name('retos.fuerzabruta.index');
Route::get('retos/fuerzabruta/reto1', [RetoController::class, 'login1'])->name('retos.fuerzabruta.reto1');
Route::get('retos/fuerzabruta/reto2', function () {return view('retos/fuerzabruta/reto2');})->name('retos.fuerzabruta.reto2');
Route::post('retos/fuerzabruta/reto2', [RetoController::class, 'login2'])->name('retos.fuerzabruta.reto2');
