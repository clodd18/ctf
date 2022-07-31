<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Retos') }}
        </h2>
    </x-slot>


    <div class="flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div class="w-full sm:max-w-2xl mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <div class="ml-12 mr-12">
                <form action="{{route('retos.update', $reto)}}" method="POST">
                    @csrf
                    @method('put')
                    <div class="mt-1">
                        <x-jet-label class="text-lg font-bold"  value="{{ __('Nombre') }}" />
                        <input class=" border-gray-300 text-gray-500 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" type="text" name="nombre" style="width: 500px;" value="{{old('nombre', $reto->nombre)}}">
                        @error('nombre')
                            <br>
                            <small>*{{$message}}</small>
                            <br>
                        @enderror
                    </div>

                    <div class="mt-4">
                        <x-jet-label class="text-lg font-bold"  value="{{ __('Descripción') }}" />
                        <textarea class="border-gray-300 text-gray-500 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" name="descripcion" rows="5" style="width: 500px;">{{old('descripcion',$reto->descripcion)}}</textarea>
                        @error('descripcion')
                            <br>
                            <small>*{{$message}}</small>
                            <br>
                        @enderror
                    </div>

                    <div class="mt-4">
                        <x-jet-label class="text-lg font-bold"  value="{{ __('Categoría') }}" />
                        <select class=" border-gray-300 text-gray-500 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" type="text" name="categoria" style="width: 500px;" value="{{old('enlace', $reto->categoria)}}">
                            <option value={{$reto->categoria}}>{{$reto->categoria}}</option>
                            <option value="Inyeccion de SQL">Inyeccion de SQL</option>
                            <option value="Inyeccion de comandos">Inyeccion de comandos</option>
                            <option value="Inyeccion de codigo">Inyeccion de codigo</option>
                            <option value="XSS">XSS</option>
                            <option value="CSRF">CSRF</option>
                            <option value="Fuerza bruta">Fuerza bruta</option>
                        </select>
                    </div>

                    <div class="mt-4">
                        <x-jet-label class="text-lg font-bold" value="{{ __('Enlace') }}" />
                        <input class=" border-gray-300 text-gray-500 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" type="text" name="enlace" style="width: 500px;" value="{{old('enlace', $reto->enlace)}}">
                        @error('enlace')
                            <br>
                            <small>*{{$message}}</small>
                            <br>
                        @enderror
                    </div>

                    <div class="mt-4">
                        <x-jet-label class="text-lg font-bold" value="{{ __('Flag') }}" />
                        <input class=" border-gray-300 text-gray-500 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" type="text" name="flag" style="width: 500px;" value="{{old('flag', $reto->flag)}}">
                        @error('flag')
                            <br>
                            <small>*{{$message}}</small>
                            <br>
                        @enderror
                    </div>
                    <div class="flex items-center justify-center mt-4">

                        <a href="{{route('retos.index')}}" class="mr-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition'">Volver</a>

                        <button type="submit" class="mr-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition'">Actualizar</button>
                    </div>
                </form>

            </div>

        </div>
    </div>



</x-app-layout>
