<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReto;
use App\Models\Cuestionario;
use App\Models\Resultado;
use App\Models\Reto;
use App\Models\RetoResuelto;
use App\Models\User;
use App\Rules\FlagCheck;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
        $resuelto = RetoResuelto::where('user_id', $user->id)->where('reto_id', $reto->id)->count();
        if ($resuelto==0){
            DB::table('reto_resueltos')->insert(['user_id' => $user->id,'reto_id' => $reto->id]);
        }
        $cuestionario = Cuestionario::where('nombre',$reto->categoria)->first();
        return redirect()->route('retos.categoria', $cuestionario->id);
    }

    public function login1(Request $request){
        if (is_null($request->usuario) || is_null($request->password)){
            return view('retos.fuerzabruta.reto1');
        }else{
            $resultado = User::where('email', $request->usuario)->first();
            if(!$resultado){
                return view('retos.fuerzabruta.reto1');
            }elseif(Hash::check($request->password, $resultado->password)){
                return view('retos.fuerzabruta.index');
            }else{
                return view('retos.fuerzabruta.reto1');
            }
        }
    }

    public function login2(Request $request){
        if (is_null($request->usuario) || is_null($request->password)){
            return view('retos.fuerzabruta.reto2');
        }else{
            $resultado = User::where('email', $request->usuario)->first();
            if(!$resultado){
                return view('retos.fuerzabruta.reto2');
            }elseif(Hash::check($request->password, $resultado->password)){
                return view('retos.fuerzabruta.index');
            }else{
                return view('retos.fuerzabruta.reto2');
            }
        }
    }

    public function mensaje(Request $request){
        $user = Auth::user();
        if (!is_null($request->texto)){
            DB::table('mensajes')->insert(['user_id' => $user->id, 'mensaje' => $request->texto]);
        }
        $msj = DB::select("select mensaje from mensajes order by id desc limit 1");
        return view('retos.xss.reto2', compact('msj'));
    }

    public function mensaje2(Request $request){
        $user = Auth::user();
        if (!is_null($request->texto)){
            DB::table('mensajes')->insert(['user_id' => $user->id, 'mensaje' => $request->texto]);
        }
        $msj = DB::select("select mensaje from mensajes where user_id = '$user->id' order by id desc limit 1");
        return view('retos.xss.reto3', compact('msj'));
    }

    public function cambiarPass(Request $request){
        $user = Auth::user();
        if (!is_null($request->pass1) && !is_null($request->pass2) && $request->pass1===$request->pass2){
            DB::table('users')->where('id', $user->id)->update(['password' => Hash::make($request->pass1)]);
            $mensaje = "Contraseña cambiada correctamente";
        }else{
            $mensaje = "Error al cambiar la contraseña";
        }
        return view('retos.csrf.reto1', compact('mensaje'));
    }
}
