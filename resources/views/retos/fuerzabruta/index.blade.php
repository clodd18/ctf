<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bienvenido') }}
        </h2>
    </x-slot>


    <div class="flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div class="w-full sm:max-w-2xl mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <div class="ml-12 mr-12">
                <div class="flex items-center justify-center mt-4">

                    <x-jet-label class="text-lg font-bold mb-4"  value="{{ __('Enhorabuena, el usuario y la contraseña son correctos') }}" />
                </div>
            </div>

        </div>
    </div>



</x-guest-layout>
