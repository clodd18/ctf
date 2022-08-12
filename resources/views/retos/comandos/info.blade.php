<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div class="mt-8 text-2xl">
                        Inyección de Comandos de Sistema Operativo
                    </div>

                    <div class="mt-6 text-gray-500">
                        <p style='margin: 3pt 0cm 0cm; text-align: justify; line-height: 1.5; font-size: 16px; font-family: "Times New Roman", serif;'><span style='font-family: "Times New Roman", Times, serif; font-size: 18px;'>La inyecci&oacute;n de comandos es una vulnerabilidad que permite al atacante ejecutar comandos directamente en el sistema operativo en el que se ejecuta una aplicaci&oacute;n web. Existen algunos sitios web en los que permiten al usuario enviar comandos a trav&eacute;s de una entrada o que la entrada en si sea un par&aacute;metro de dicho comando que se ejecuta internamente. Sin los debidos controles sobre los par&aacute;metros de entrada, se podr&iacute;an ejecutar comandos m&aacute;s all&aacute; de la intenci&oacute;n de la propia aplicaci&oacute;n web y del programador que la desarroll&oacute;.</span></p>
                        <p style='margin: 3pt 0cm 0cm; text-align: justify; line-height: 1.5; font-size: 16px; font-family: "Times New Roman", serif;'><br></p>
                        <p style='margin: 3pt 0cm 0cm; text-align: justify; line-height: 1.5; font-size: 16px; font-family: "Times New Roman", serif;'><span style='font-family: "Times New Roman", Times, serif; font-size: 18px;'>Al explotar estas vulnerabilidades, los atacantes pueden generar un gran n&uacute;mero de riesgos para nuestro sistema, algunos de ellos son los siguientes:</span></p>
                        <ul>
                            <li style='font-size: 18px; font-family: "Times New Roman", Times, serif; line-height: 1.5;'>     -   Robo de credenciales de los usuarios o del sistema en donde se ejecuta la aplicaci&oacute;n.</li>
                            <li style='font-size: 18px; font-family: "Times New Roman", Times, serif; line-height: 1.5;'>     -   Dejar temporalmente sin servicio al servidor o las conexiones que los desarrolladores y personal de mantenimiento utilizan para conectar con el servidor (SSH o Terminal Server)</li>
                            <li style='font-size: 18px; font-family: "Times New Roman", Times, serif; line-height: 1.5;'>     -   Dejar aplicaciones maliciosas en el servidor, ya sea de manera visible u oculta.</li>
                            <li style='font-size: 18px; font-family: "Times New Roman", Times, serif; line-height: 1.5;'>     -   Hacer modificaciones sobre la aplicaci&oacute;n que se est&aacute; ejecutando o sobre cualquier a la que el atacante pueda acceder.</li>
                        </ul>
                        <p><br></p>
                        <p style='margin: 3pt 0cm 0cm; text-align: justify; line-height: 1.5; font-size: 16px; font-family: "Times New Roman", serif;'><span style='font-family: "Times New Roman", Times, serif; font-size: 18px;'>La peor de las situaciones ser&iacute;a que el atacante lograra ejecutar ciertos comandos que hicieran que se convirtiera en usuario administrador y obtuviera un control total sobre el sistema.</span></p>
                        <p style='margin: 3pt 0cm 0cm; text-align: justify; line-height: 1.5; font-size: 16px; font-family: "Times New Roman", serif;'><br></p>
                        <p style='margin: 3pt 0cm 0cm; text-align: justify; line-height: 1.5; font-size: 16px; font-family: "Times New Roman", serif;'><span style='font-family: "Times New Roman", Times, serif; font-size: 18px;'>Un ejemplo muy simple a la hora de ilustrar una vulnerabilidad de inyecci&oacute;n de comandos, ser&iacute;a una web que pide una direcci&oacute;n sobre la que hacer un ping en el sistema. Si el programador que implementa esta p&aacute;gina, ejecuta directamente la instrucci&oacute;n ping con la ip que viene en el par&aacute;metro anterior a trav&eacute;s de una instrucci&oacute;n de PHP llamada Shell_exec(). Se ejecutar&iacute;a el ping directamente sin aplicar ning&uacute;n filtro, y como Shell_exec() ejecuta toda instrucci&oacute;n que se le pase como par&aacute;metro, si un atacante quisiera a&ntilde;adir cualquier otra instrucci&oacute;n despu&eacute;s del ping a trav&eacute;s del t&iacute;pico pipeline ( | ) para separar comandos del sistema operativo, es muy probable que logre ejecutar dicha instrucci&oacute;n.</span></p>
                        <p style='margin: 3pt 0cm 0cm; text-align: justify; line-height: 1.5; font-size: 16px; font-family: "Times New Roman", serif;'><br></p>
                        <p style="text-align: justify; line-height: 1.5;"><span style='font-size: 18px; line-height: 150%; font-family: "Times New Roman", Times, serif;'>Es muy importante que los desarrolladores tengan muy en cuenta esta vulnerabilidad a la hora de dise&ntilde;ar una aplicaci&oacute;n e intentar evitar el uso directo de ejecuciones de comandos con par&aacute;metros que provengan de un formulario. En caso de no ser posible evitarlo, lo que si se debe hacer es sanear la entrada mediante comprobaciones, evitar caracteres especiales, sobre todo los s&iacute;mbolos &amp; y | que son muy usados en la sintaxis tanto de Linux como de Windows para concatenar instrucciones. Y la m&aacute;s importante de todas las precauciones, jam&aacute;s ejecutar tu aplicaci&oacute;n con privilegios de administrador, no es necesario facilitar el trabajo a los atacantes.</span></p>
                    </div>
                    <a href="{{ url()->previous() }}" class="mt-2 ml-12 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition'">Volver</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
