<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cambio de contraseña') }}
        </h2>
    </x-slot>


    <div class="flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div class="w-full sm:max-w-2xl mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <div class="ml-12 mr-12">
                <form action="" method="GET">
                    En esta página podemos imprimir en pantalla el texto escrito.
                    <div class="mt-1">
                        <x-jet-label class="text-lg font-bold"  value="{{ __('Introduce la nueva contraseña') }}" />
                        <input class=" border-gray-300 text-gray-500 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" type="text" name="pass1" style="width: 500px;" value="{{old('pass1')}}">
                    </div>
                    <div class="mt-1">
                        <x-jet-label class="text-lg font-bold"  value="{{ __('Vuelve a introducir la nueva contraseña') }}" />
                        <input class=" border-gray-300 text-gray-500 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" type="text" name="pass2" style="width: 500px;" value="{{old('pass2')}}">
                    </div>
                    <div class="flex items-center justify-center mt-4">
                        <button type="submit" class="mr-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition'">Consultar</button>
                    </div>
                    <?php
                        if( isset( $_REQUEST[ 'pass1' ] ) ) {
                            echo "<br />";
                            echo $mensaje;
                            echo "<br />";
                            if (isset($_SERVER[ 'HTTP_REFERER' ])){
                                if (substr($_SERVER[ 'HTTP_REFERER' ], 0, 32) != "http://ctf.test/retos/csrf/reto1" && $_SERVER[ 'HTTP_REFERER' ] != "http://ctf.test/login"){
                                    echo "<br />";
                                    echo "vienes de la pagina ".$_SERVER[ 'HTTP_REFERER' ];
                                    echo "<br /><br />";
                                    echo "reto superado el flag que buscas es Draconis";
                                    //<iframe src="/retos/csrf/reto1?pass1=1234&pass2=1234" style=""position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden;"></iframe>
                                }
                            }
                        }
                    ?>
                </form>

            </div>

        </div>
    </div>
</x-app-layout>
