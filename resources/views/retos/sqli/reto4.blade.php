<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Inyección de SQL ciega basada en tiempo') }}
        </h2>
    </x-slot>


    <div class="flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div class="w-full sm:max-w-2xl mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <div class="ml-12 mr-12">
                <form action="" method="POST">
                    @csrf
                    En esta página podemos mandarle al administrador el flag de un reto para que revise si es válido o no.
                    <div class="mt-1">
                        <x-jet-label class="text-lg font-bold"  value="{{ __('Flag') }}" />
                        <input class=" border-gray-300 text-gray-500 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" type="text" name="flag" style="width: 500px;" value="{{old('flag')}}">
                        <?php
                            if( isset( $_REQUEST[ 'flag' ] ) ) {
                                if ( empty($_POST[ 'flag' ])){
                                    echo "*Por favor, introduce un valor en el campo flag";
                                }
                            }

                        ?>
                    </div>
                    <div class="mt-1">
                        <x-jet-label class="text-lg font-bold"  value="{{ __('Id del reto') }}" />

                        <select class=" border-gray-300 text-gray-500 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" type="text" name="reto" style="width: 500px;">
                            <?php
                            $resultado = DB::select("select id, nombre from retos");
                                foreach ($resultado as $r) {
                                    $nombre = $r->nombre;
                                    $id  = $r->id;
                                    echo "<option value={$id}>{$nombre}</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="flex items-center justify-center mt-4">

                        <button type="submit" class="mr-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition'">Consultar</button>
                    </div>
                    <?php
                        if( isset( $_REQUEST[ 'flag' ] ) ) {
                            if ( !empty($_POST[ 'flag' ])){
                                $reto= $_POST['reto'];
                                if ($reto <> null){
                                    $resultado = DB::select("select flag from retos where id = $reto");
                                    $resultado = array_shift($resultado);
                                    $flagValida = $resultado->flag;
                                    $flagUsuario = $_REQUEST['flag'];
                                }
                            }
                        }

                    ?>
                </form>

            </div>

        </div>
    </div>



</x-app-layout>
