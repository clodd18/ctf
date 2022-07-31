<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Retos') }}
        </h2>
    </x-slot>


    <div class="flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div class="w-full sm:max-w-2xl mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <div class="ml-12 mr-12">

                    <div class="mt-1">
                        <x-jet-label class="text-lg font-bold"  value="{{ __('Nombre') }}" />
                        <h2 class="text-gray-500">{{$reto->nombre}}</h2>

                    </div>

                    <div class="mt-4">
                        <x-jet-label class="text-lg font-bold"  value="{{ __('Descripción') }}" />
                        <h2 class="text-gray-500">{{$reto->descripcion}}</h2>
                    </div>

                    <div class="mt-4">
                        <x-jet-label class="text-lg font-bold"  value="{{ __('Categoría') }}" />
                        <h2 class="text-gray-500">{{$reto->categoria}}</h2>
                    </div>

                    <div class="mt-4">
                        <x-jet-label class="text-lg font-bold" value="{{ __('Enlace') }}" />
                        <h2 class="text-gray-500">{{$reto->enlace}}</h2>
                    </div>

                    <div class="mt-4">
                        <x-jet-label class="text-lg font-bold" value="{{ __('Flag') }}" />
                        <h2 class="text-gray-500">{{$reto->flag}}</h2>
                    </div>
                    <div class="flex items-center justify-center mt-4">

                        <a href="{{route('retos.index')}}" class="mr-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition'">Volver</a>

                        <a href="{{route('retos.edit', $reto)}}" class="mr-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition'">Editar</a>

                        <form action="{{route('retos.destroy', $reto)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="mr-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition'">Eliminar</button>
                        </form>

                    </div>
            </div>

        </div>
    </div>



</x-app-layout>
