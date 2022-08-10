<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Inyectando código en etiquetas HTML') }}
        </h2>
    </x-slot>


    <div class="flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div class="w-full sm:max-w-2xl mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <div class="ml-12 mr-12">
                <form action="" method="POST">
                    En esta página podemos consultar como se ve un texto en función de la etiqueta HTML que le apliquemos.
                    <div class="mt-1">
                        <x-jet-label class="text-lg font-bold"  value="{{ __('Texto a mostrar') }}" />
                        <input class=" border-gray-300 text-gray-500 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" type="text" name="texto" style="width: 500px;" value="{{old('texto')}}">
                    </div>
                    <div class="flex items-center justify-center mt-4">
                        <button type="submit" class="mr-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition'">Consultar</button>
                    </div>
                    <div class="mt-4">
                        <x-jet-label class="text-lg font-bold"  value="{{ __('Apariencia') }}" />
                        <select class=" border-gray-300 text-gray-500 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" type="text" name="opcion" style="width: 500px;">
                            <option value="librerias/strong.php">Texto en negrita con la etiquta strong</option>
                            <option value="librerias/em.php">Texto en cursiva con la etiquta em</option>
                            <option value="librerias/big.php">Texto mas grande con la etiquta big</option>
                            <option value="librerias/small.php">Texto mas pequeño con la etiquta small</option>
                            <option value="librerias/sub.php">Texto como subíndice con la etiquta sub</option>
                            <option value="librerias/sup.php">Texto como superíndice con la etiquta sup</option>
                        </select>
                    </div>
                    <br/>
                    <?php
                        if( isset( $_REQUEST[ 'texto' ] ) ) {
                            $texto = $_POST['texto'];
                            $estilo = $_POST['opcion'];
                            if ($texto <> null){
                                echo '<label class="block text-gray-700 text-lg font-bold">Texto sin formato</label>';
                                echo $texto;
                                echo '<br/><br/>';
                                echo '<label class="block text-gray-700 text-lg font-bold">Texto con formato</label>';
                                include $estilo;
                            }
                        }
                    ?>
                </form>

            </div>

        </div>
    </div>



</x-app-layout>
