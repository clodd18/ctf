<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cuestionario ') . $cuestionario->nombre }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="ml-4 text-lg text-black-600 leading-7 font-semibold">Este cuestionario tiene una puntuación de {{$resultado}}.</div>
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                    <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1">

                        @foreach ($preguntas as $p)
                            <div class="p-6 border-t border-gray-200 md:border-l">
                                <div class="ml-12 mb-6 flex items-center">
                                    <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">{{ $p->pregunta}}</div>
                                </div>

                                <div class="ml-12">
                                    <div class="ml-4 mt-2 text-sm text-gray-500">
                                        @foreach ($respuestas as $r)
                                            @if ($r->pregunta_id === $p->id)
                                                @if ($p->respuesta_id === $r->id && $inputs[$p->id] == $r->id)
                                                <div class="text-sm text-gray-500 bg-green-300" >
                                                    <input type="radio" name={{$p->id}} value={{$r->id}} checked=true @disabled(true)>{{ $r->respuesta}}
                                                </div>
                                                @elseif ($p->respuesta_id != $r->id && $inputs[$p->id] == $r->id)
                                                <div class="text-sm text-gray-500 bg-red-300" >
                                                    <input type="radio" name={{$p->id}} value={{$r->id}} checked=true @disabled(true)>{{ $r->respuesta}}
                                                </div>
                                                @else
                                                <div class="text-sm text-gray-500">
                                                    <input type="radio" name={{$p->id}} value={{$r->id}} @disabled(true)>{{ $r->respuesta}}
                                                </div>
                                                @endif
                                                <br>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="flex items-center justify-center mt-4">
                    <a class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition"
                    href="/dashboard">Volver</a>
                </div>
        </div>
    </div>
</x-app-layout>
