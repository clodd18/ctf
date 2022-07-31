<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Estadisticas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="bg-gray-200 bg-opacity-25 grid grid-cols-2">

                    <div class="border-r">
                        <div class="p-6 text-lg text-gray-800 leading-7 font-bold">Retos superados</div>
                        @foreach ($retos as $r)
                        <div class="ml-6 py-1 ">
                            <div class="">Reto {{$r->reto_id}} superado</div>
                        </div>
                        @endforeach
                    </div>

                    <div>
                        <div class="p-6 text-lg text-gray-800 leading-7 font-bold">Cuestionarios Resueltos</div>
                        @foreach ($cuestionarios as $c)
                        <div class="ml-6 py-1 ">
                            <div class="">Cuestionario {{$c->cuestionario_id}} superado con una puntuacion maxima de {{$c->aciertos}}</div>
                        </div>
                        @endforeach
                    </div>


                </div>

            </div>

            <div class="flex items-center justify-center mt-4">
                <form action="{{route('estadisticas.destroy')}}" method="POST">
                    @csrf
                    <button type="submit" class="mr-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition'">Borrar estadisticas</button>
                </form>
            </div>

        </div>
    </div>
</x-app-layout>
