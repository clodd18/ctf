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
                        Inyección de SQL
                    </div>

                    <div class="mt-6 text-gray-500">
                        <p skip="true" style='margin: 3pt 0cm 0cm; text-align: justify; line-height: 1.5; font-size: 16px; font-family: "Times New Roman", serif;'><span style='font-family: "Times New Roman", Times, serif; font-size: 18px;'>Los ataques de Inyecci&oacute;n de SQL son ataques que se suelen realizar sobre formularios que se encuentran en nuestra p&aacute;gina web. Dichos formularios hacen consultas a la base de datos para de esta manera obtener los resultados que se desean. Si estos formularios no se encuentran bien configurados y los par&aacute;metros y las consultas no son debidamente validadas, podr&iacute;amos estar dejando una puerta abierta a que puedan hacernos un ataque de este tipo, ya que podr&iacute;an inyectar comandos SQL directamente sobre nuestra base de datos a voluntad. Un ataque exitoso de inyecci&oacute;n de SQL puede provocar el acceso a datos confidenciales, contrase&ntilde;as, tarjetas de cr&eacute;dito, pueden provocar el borrado de datos, o la modificaci&oacute;n de dichos datos para entorpecer el funcionamiento de la web y negocio que pueda haber detr&aacute;s o provocar da&ntilde;os graves a la reputaci&oacute;n de dicho negocio. Es posible que, en algunos casos, incluso se logre a trav&eacute;s de dichas intrusiones, llegar al sistema operativo de la maquina y tomar el control de esta o incluso de la infraestructura al completo.</span></p>
                        <p skip="true" style='margin: 3pt 0cm 0cm; text-align: justify; line-height: 1.5; font-size: 16px; font-family: "Times New Roman", serif;'><span style="font-size: 18px;"><br></span><span style='font-family: "Times New Roman", Times, serif; font-size: 18px;'>Existen varios tipos de ataque de inyecci&oacute;n de SQL:</span></p>
                        <ul>
                            <li style='text-align: justify; line-height: 1.5; font-family: "Times New Roman", Times, serif; font-size: 18px;'><strong>     -   Ataques por error</strong>, es el m&aacute;s t&iacute;pico y f&aacute;cil de explotar de los errores que nos podemos encontrar en una p&aacute;gina web vulnerable. El fallo consiste en que la propia aplicaci&oacute;n web nos va indicando a trav&eacute;s de unos errores en pantalla, de los fallos que est&aacute;n habiendo en la base de datos, por tanto, podemos ver la consulta que se est&aacute; realizando y a su vez modificar nuestra llamada para aprovecharnos de ella y llegar a hacer el ataque.</li>
                            <li style='text-align: justify; line-height: 1.5; font-family: "Times New Roman", Times, serif; font-size: 18px;'><strong>     -   Ataques de tipo UNION</strong>.<strong>&nbsp;</strong>En este tipo de ataque lo que tenemos es que el portal nos devuelve un resultado en funci&oacute;n de los par&aacute;metros que introducimos en su formulario. El ataque consiste en a&ntilde;adir al resultado normal de la web, el resultado de otra query a trav&eacute;s de una sentencia UNION para de esta forma se ejecuten las dos instrucciones, la que la web tiene predefinida y la que hemos unido nosotros.</li>
                            <li style='text-align: justify; line-height: 1.5; font-family: "Times New Roman", Times, serif; font-size: 18px;'><strong>     -   Ataques ciegos</strong>, son los m&aacute;s complicados de explotar y los que suelen llevar m&aacute;s tiempo. En este caso lo que se hace es ir preguntando a la base de datos para que responda de manera act&uacute;e de una forma u otra en caso de cumplir una condici&oacute;n o no, pero sin realmente devolvernos un dato de nuestra base de datos. Existen dos tipos de ataques en funci&oacute;n de que podamos ver como resultado en la web: los basados en condicionales, es decir, si la consulta es correcta da un resultado, si es incorrecta da otro; y los basados en tiempo, si la consulta es correcta, la web responde de manera correcta, pero con un tiempo de retardo que hemos establecido, pero si no es correcta, no se produce dicho retardo.</li>
                        </ul>
                        <p><span style="font-size: 18px;"><br></span></p>
                        <p skip="true" style='margin: 3pt 0cm 12pt; text-align: justify; line-height: 1.5; font-size: 16px; font-family: "Times New Roman", serif;'><span style='font-family: "Times New Roman", Times, serif; font-size: 18px;'>&iquest;C&oacute;mo puedo evitar este tipo de ataques? Para evitar este tipo de ataques existen distintos mecanismos y es muy importante que todos ellos sean tomados en cuenta a la hora de programar una p&aacute;gina web y asegurarse de que todos ellos est&aacute;n activos y funcionales antes de pasarla a producci&oacute;n:</span></p>
                        <ul>
                            <li style='text-align: justify; line-height: 1.5; font-family: "Times New Roman", Times, serif; font-size: 18px;'><strong>     -   Validar los datos</strong>. Lo que haremos ser&aacute; comprobar todos los datos que se solicitan al usuario y comprobar que todos los datos cumplen unos ciertos requisitos de validaci&oacute;n. Por ejemplo, si se esperan n&uacute;meros que solo haya n&uacute;meros, si se espera un nombre que no haya n&uacute;meros o caracteres especiales.</li>
                            <li style='text-align: justify; line-height: 1.5; font-family: "Times New Roman", Times, serif; font-size: 18px;'><strong>     -   Evitar la exposici&oacute;n</strong>. Dejar solo accesible aquellas bases de datos que la web vaya a necesitar y evitar el acceso a otras bases de datos internas que nos sean necesarias y m&aacute;s cr&iacute;ticas.</li>
                            <li style='text-align: justify; line-height: 1.5; font-family: "Times New Roman", Times, serif; font-size: 18px;'><strong>     -   Escapar los comandos</strong>. Lo que se pretende con esto es evitar que nuestro formulario sea capaz de ejecutar sentencias propias del lenguaje de base de datos.</li>
                            <li style='text-align: justify; line-height: 1.5; font-family: "Times New Roman", Times, serif; font-size: 18px;'><strong>     -   Usar herramientas de an&aacute;lisis</strong>. Existen multitud de herramientas, ya sean de pago o gratuitas que peri&oacute;dicamente se pueden ejecutar sobre la web para indicarnos si nuestros formularios son susceptibles de sufrir un ataque de este tipo.</li>
                        </ul>
                        <p><span style="font-size: 18px;"><br></span></p>
                        <p skip="true" style="text-align: justify; line-height: 1.5;"><span style='font-size: 18px; line-height: 150%; font-family: "Times New Roman", Times, serif;'>En el caso particular de Laravel se incluye Eloquent, un mapeador relacional de objetos (ORM) que hace que sea agradable interactuar con su base de datos. Al usar Eloquent, cada tabla de la base de datos tiene un &quot;Modelo&quot; correspondiente que se usa para interactuar con esa tabla. Adem&aacute;s de recuperar registros de la tabla de la base de datos, los modelos Eloquent tambi&eacute;n le permiten insertar, actualizar y eliminar registros de la tabla. El uso de Eloquent para realizar toda la interacci&oacute;n con la base de datos, evita la posibilidad de casi la totalidad de las inyecciones de SQL ya que se encarga de validad, escapar y analizar en general todas las consultas y asegurarse de que ninguna escapa a lo establecido en el Modelo programado y a los par&aacute;metros preestablecidos.</span></p><br>

                    </div>
                    <a href="{{ url()->previous() }}" class="mt-2 ml-12 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition'">Volver</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
