<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReto;
use App\Models\Reto;
use Illuminate\Http\Request;

class RetoController extends Controller
{
    public function index(){

        $retos = Reto::all();

        return view('retos.index', compact('retos'));
    }

    public function show(Reto $reto){

        return view('retos.show', compact('reto'));
    }

    public function destroy(Reto $reto){
        $reto->delete();
        return redirect()->route('retos.index');
    }

    public function edit(Reto $reto){

        return view('retos.edit', compact('reto'));
    }


    public function create(){
        return view('retos.create');
    }

    public function store(StoreReto $request){
        $reto = Reto::create($request->all());
        return redirect()->route('retos.show', $reto->id);
    }


    public function update(Request $request, Reto $reto)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            'descripcion' => 'required|min:30',
            'enlace' => 'required|url|max:255',
            'flag' => 'required|max:255'
        ]);
        $reto->update($request->all());
        return redirect()->route('retos.show', $reto->id);
    }

}
