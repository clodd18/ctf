<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Retos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="flex items-center justify-center mb-4">
                <a href="{{route('retos.create')}}" class="mr-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition'">Crear nuevo reto</a>
            </div>

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1">

                    @foreach ($retos as $r)
                        <div class="p-6 border-t border-gray-200">
                            <div class="ml-12 items-center">
                                <div class="text-lg text-gray-800 leading-7 font-bold"><a href="{{route('retos.show', $r)}}">{{$r->nombre}}</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-sm text-gray-500">
                                {{$r->descripcion}}
                                </div>
                                <div class="py-4 grid grid-cols-1 md:grid-cols-3">
                                    <div class="">Categoria: {{$r->categoria}}</div>
                                    <div class="">Enlace: {{$r->enlace}}</div>
                                    <div class="">Flag: {{$r->flag}}</div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>

            <div class="flex items-center justify-center mt-4">
                <a href="{{route('retos.create')}}" class="mr-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition'">Crear nuevo reto</a>
            </div>
            
        </div>
    </div>
</x-app-layout>
