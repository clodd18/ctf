<?php

namespace App\Http\Controllers;

use App\Models\Cuestionario;
use App\Models\Pregunta;
use App\Models\Respuesta;
use App\Models\Resultado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CuestionarioController extends Controller
{
    public function show(Cuestionario $cuestionario){

        $preguntas = Pregunta::where('cuestionario_id', $cuestionario->id)->get();
        $respuestas = Respuesta::select('respuestas.*')->join('preguntas', 'preguntas.id', '=', 'respuestas.pregunta_id')->where('preguntas.cuestionario_id', $cuestionario->id)->get();

        return view('cuestionarios.show', compact('cuestionario', 'preguntas', 'respuestas'));
    }

    public function submit(Request $request,Cuestionario $cuestionario){
        $preguntas = Pregunta::where('cuestionario_id', $cuestionario->id)->get();
        $respuestas = Respuesta::select('respuestas.*')->join('preguntas', 'preguntas.id', '=', 'respuestas.pregunta_id')->where('preguntas.cuestionario_id', $cuestionario->id)->get();

        $inputs = $request->all();

        $resultado=0;
        for ($i = 1+(($cuestionario->id-1)*10); $i<=10+(($cuestionario->id-1)*10); $i++){
            if (array_key_exists($i, $inputs)){
                $respuesta = Respuesta::where('id',$inputs[$i])->first();
                $pregunta = Pregunta::where('id', $respuesta->pregunta_id)->first();
                if ($pregunta->respuesta_id === $respuesta->id){
                    $resultado++;
                };
            }else{
                $inputs[$i]="0";
            };
        }

        $user = Auth::user();
        $result = new Resultado();
        $result->user_id = $user->id;
        $result->cuestionario_id = $cuestionario->id;
        $result->aciertos = $resultado;
        $result->save();

        return view('cuestionarios.resultado', compact('cuestionario', 'preguntas', 'respuestas', 'inputs', 'resultado'));
    }
}
