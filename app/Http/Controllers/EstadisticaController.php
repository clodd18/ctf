<?php

namespace App\Http\Controllers;

use App\Models\Resultado;
use App\Models\RetoResuelto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EstadisticaController extends Controller
{
    public function show(){
        $user = Auth::user();
        $cuestionarios = DB::select("SELECT id,user_id,max(aciertos) as aciertos, cuestionario_id, created_at, updated_at FROM resultados WHERE user_id =".$user->id." group by cuestionario_id");
        $retos = RetoResuelto::where('user_id', $user->id)->get();
        return view('estadisticas', compact('cuestionarios','retos'));
    }

    public function destroy(){
        $user = Auth::user();
        $deleted = DB::table('resultados')->where('user_id', $user->id)->delete();
        $deleted = DB::table('reto_resueltos')->where('user_id', $user->id)->delete();

        $cuestionarios = DB::select("SELECT id,user_id,max(aciertos) as aciertos, cuestionario_id, created_at, updated_at FROM resultados WHERE user_id =".$user->id." group by cuestionario_id");
        $retos = RetoResuelto::where('user_id', $user->id)->get();
        return view('estadisticas', compact('cuestionarios','retos'));
    }
}
