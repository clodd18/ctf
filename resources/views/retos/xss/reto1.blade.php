<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        @livewireStyles

        <!-- Scripts -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <script src="{{ mix('js/app.js') }}" defer></script>
        <script>
            parent.postMessage(window.location.toString(), "*");
            var originalAlert = window.alert;
            window.alert = function(texto) {
            parent.postMessage("success", "*");
            setTimeout(function() {
                originalAlert("Felicidades, Has lanzado el alert:\n\n"
                + texto + "\n\nEl flag que buscas es Clodd.");
            }, 50);
            }
        </script>

    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                            {{ __('XSS básica') }}
                        </h2>
                    </div>
                </header>

            <!-- Page Content -->
            <main>
                <div class="flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
                    <div class="w-full sm:max-w-2xl mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                        <div class="ml-12 mr-12">
                            <form action="" method="GET">
                                En esta página podemos imprimir en pantalla el texto escrito.
                                <div class="mt-1">
                                    <x-jet-label class="text-lg font-bold"  value="{{ __('Texto a escribir en pantalla') }}" />
                                    <input class=" border-gray-300 text-gray-500 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" type="text" name="texto" style="width: 500px;" value="{{old('texto')}}">
                                </div>
                                <div class="flex items-center justify-center mt-4">
                                    <button type="submit" class="mr-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition'">Consultar</button>
                                </div>
                                <?php
                                    if( isset( $_REQUEST[ 'texto' ] ) ) {
                                        $texto= $_GET['texto'];
                                        echo $texto;
                                    }
                                ?>

                            </form>
                        </div>

                    </div>
                </div>
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>



