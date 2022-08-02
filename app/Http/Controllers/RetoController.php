<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReto;
use App\Models\Cuestionario;
use App\Models\Resultado;
use App\Models\Reto;
use App\Models\RetoResuelto;
use App\Rules\FlagCheck;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

    public function categoria(Cuestionario $cuestionario){
        $user = Auth::user();
        $maximoCuestionario = Resultado::where('user_id', $user->id)->where('cuestionario_id', $cuestionario->id)->max('aciertos');
        if($maximoCuestionario == null){
            $maximoCuestionario = 0;
        }
        $retosResultos = RetoResuelto::where('user_id', $user->id)->get();
        $retos = Reto::where('categoria', $cuestionario->nombre)->get();
        return view('retos.categoria', compact('cuestionario', 'maximoCuestionario', 'retosResultos', 'retos'));
    }

    public function resolver(Request $request, Reto $reto)
    {
        $this->validate($request, ['flag'.$reto->id => ['required', new FlagCheck($reto)]]);
        $user = Auth::user();
        $resuleto = RetoResuelto::where('user_id', $user->id)->where('reto_id', $reto->id)->count();
        if ($resuleto==0){
            DB::table('reto_resueltos')->insert(['user_id' => $user->id,'reto_id' => $reto->id]);
        }
        $cuestionario = Cuestionario::where('nombre',$reto->categoria)->first();
        return redirect()->route('retos.categoria', $cuestionario->id);
    }

    public function reto1get($reto){
        return view('retos.reto1get', compact('reto'));
    }
}
