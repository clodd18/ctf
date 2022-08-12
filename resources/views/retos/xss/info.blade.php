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
                        Cross-site Scripting (XSS)
                    </div>
                    <div class="mt-6 text-gray-500">
                        <br />
                        <p style='margin: 3pt 0cm 0cm; text-align: justify; line-height: 1.5; font-size: 16px; font-family: "Times New Roman", serif;'><span style='font-family: "Times New Roman", Times, serif; font-size: 18px;'>Cross-site Scripting (XSS) es un ataque de inyecci&oacute;n de c&oacute;digo del lado del cliente. El atacante tiene como objetivo ejecutar scripts maliciosos en un navegador web de la v&iacute;ctima mediante la inclusi&oacute;n de c&oacute;digo malicioso en una p&aacute;gina web. El ataque real ocurre cuando la v&iacute;ctima visita la p&aacute;gina web que ejecuta el c&oacute;digo malicioso. La p&aacute;gina web se convierte en un veh&iacute;culo para entregar el script malicioso al navegador del usuario. Los veh&iacute;culos vulnerables que se utilizan com&uacute;nmente para los ataques de Cross-site Scripting son foros, tableros de mensajes y p&aacute;ginas web que permiten comentarios.</span></p>
                        <p style='margin: 3pt 0cm 0cm; text-align: justify; line-height: 1.5; font-size: 16px; font-family: "Times New Roman", serif;'><span style='font-family: "Times New Roman", Times, serif; font-size: 18px;'><br></span></p>
                        <p style='margin: 3pt 0cm 0cm; text-align: justify; line-height: 1.5; font-size: 16px; font-family: "Times New Roman", serif;'><span style='font-family: "Times New Roman", Times, serif; font-size: 18px;'>Una p&aacute;gina es vulnerable a XSS si utiliza una entrada de usuario no desinfectada en la salida que genera. Esta entrada del usuario debe ser analizada por el navegador de la v&iacute;ctima. Los ataques XSS son posibles en VBScript, ActiveX, Flash e incluso CSS. Sin embargo, son m&aacute;s comunes en JavaScript, principalmente porque JavaScript es fundamental para la mayor&iacute;a de las experiencias de navegaci&oacute;n.</span></p>
                        <p style='margin: 3pt 0cm 0cm; text-align: justify; line-height: 1.5; font-size: 16px; font-family: "Times New Roman", serif;'><span style='font-family: "Times New Roman", Times, serif; font-size: 18px;'><br></span></p>
                        <p style='margin: 3pt 0cm 0cm; text-align: justify; line-height: 1.5; font-size: 16px; font-family: "Times New Roman", serif;'><span style='font-family: "Times New Roman", Times, serif; font-size: 18px;'>Podr&iacute;a parecer que, por lo que se ha dicho m&aacute;s arriba, el ataque de XSS es un problema para el usuario y no para la web que se ha visto comprometida, pero es una fuga de seguridad provocada por la web y como tal, debe ser revisada y subsanada, ya que la imagen y fiabilidad de la plataforma se puede ver afectada, veamos un ejemplo. Las consecuencias de la capacidad de ejecutar JavaScript en una p&aacute;gina web pueden no parecer nefastas al principio. La mayor&iacute;a de los navegadores web ejecutan JavaScript en un entorno muy controlado. JavaScript tiene acceso limitado al sistema operativo del usuario y a los archivos del usuario. Sin embargo, JavaScript a&uacute;n puede ser peligroso si se usa incorrectamente como parte de contenido malicioso:</span></p>
                        <p style="text-align: justify; line-height: 1.5;"><span style='font-family: "Times New Roman", Times, serif; font-size: 18px;'><br></span></p>
                        <ul>
                            <li style='text-align: justify; line-height: 1.5; font-family: "Times New Roman", Times, serif; font-size: 18px;'>  -  El JavaScript malicioso tiene acceso a todos los objetos a los que tiene acceso el resto de la p&aacute;gina web. Esto incluye el acceso a las cookies del usuario. Las cookies se utilizan a menudo para almacenar tokens de sesi&oacute;n. Si un atacante puede obtener la cookie de sesi&oacute;n de un usuario, puede hacerse pasar por ese usuario, realizar acciones en nombre del usuario y obtener acceso a los datos confidenciales del usuario.</li>
                            <li style='text-align: justify; line-height: 1.5; font-family: "Times New Roman", Times, serif; font-size: 18px;'>  -  JavaScript puede leer el DOM del navegador y hacerle modificaciones arbitrarias. Afortunadamente, esto solo es posible dentro de la p&aacute;gina donde se ejecuta JavaScript.</li>
                            <li style='text-align: justify; line-height: 1.5; font-family: "Times New Roman", Times, serif; font-size: 18px;'>  -  JavaScript puede usar el XMLHttpRequestobjeto para enviar solicitudes HTTP con contenido arbitrario a destinos arbitrarios.</li>
                            <li style='text-align: justify; line-height: 1.5; font-family: "Times New Roman", Times, serif; font-size: 18px;'>  -  JavaScript en los navegadores modernos puede usar API HTML5. Por ejemplo, puede obtener acceso a la geolocalizaci&oacute;n, c&aacute;mara web, micr&oacute;fono e incluso archivos espec&iacute;ficos del sistema de archivos del usuario. La mayor&iacute;a de estas API requieren la&nbsp;<span style="line-height: 150%;">aceptaci&oacute;n del usuario, pero el atacante puede usar la ingenier&iacute;a social para sortear esa limitaci&oacute;n.</span></li>
                        </ul>
                        <p style="text-align: justify; line-height: 1.5;"><span style='line-height: 150%; font-family: "Times New Roman", Times, serif; font-size: 18px;'><br></span></p>
                        <p style='margin: 3pt 0cm 0cm; text-align: justify; line-height: 1.5; font-size: 16px; font-family: "Times New Roman", serif;'><span style='line-height: 150%; font-family: "Times New Roman", Times, serif; font-size: 18px;'>Lo anterior, en combinaci&oacute;n con la ingenier&iacute;a social, permite a los delincuentes realizar ataques avanzados que incluyen el robo de cookies, la plantaci&oacute;n de troyanos, el registro de teclas, el phishing y el robo de identidad. Las vulnerabilidades XSS proporcionan el terreno perfecto para escalar los ataques a otros m&aacute;s serios. Cross-site Scripting tambi&eacute;n se puede usar junto con otros tipos de ataques, por ejemplo, Cross-Site Request Forgery (CSRF).</span></p>
                        <p style='margin: 3pt 0cm 0cm; text-align: justify; line-height: 1.5; font-size: 16px; font-family: "Times New Roman", serif;'><span style='font-family: "Times New Roman", Times, serif; font-size: 18px;'><br></span></p>
                        <p style='margin: 3pt 0cm 0cm; text-align: justify; line-height: 1.5; font-size: 16px; font-family: "Times New Roman", serif;'><span style='line-height: 150%; font-family: "Times New Roman", Times, serif; font-size: 18px;'>Hay tres tipos principales de ataques XSS. Estos son:</span></p>
                        <p style='margin: 3pt 0cm 0cm; text-align: justify; line-height: 1.5; font-size: 16px; font-family: "Times New Roman", serif;'><span style='font-family: "Times New Roman", Times, serif; font-size: 18px;'><br></span></p>
                        <ul>
                            <li style='text-align: justify; line-height: 1.5; font-family: "Times New Roman", Times, serif; font-size: 18px;'><strong><span style="line-height: 150%;">  -  XSS reflejado</span></strong><span style="line-height: 150%;">&nbsp;, donde el script malicioso proviene de la solicitud HTTP actual, que luego es procesado por la aplicaci&oacute;n web y desplegado en un punto determinado sin validaci&oacute;n de por medio.</span></li>
                            <li style='text-align: justify; line-height: 1.5; font-family: "Times New Roman", Times, serif; font-size: 18px;'><strong><span style="line-height: 150%;">  -  XSS almacenado</span></strong><span style="line-height: 150%;">&nbsp;, donde el script malicioso proviene de la base de datos del sitio web, que permanece un texto inofensivo, hasta que es recuperado y utilizado como parte del HTML en donde una vez procesado adquiere funcionalidad maliciosa.</span></li>
                            <li style='text-align: justify; line-height: 1.5; font-family: "Times New Roman", Times, serif; font-size: 18px;'><strong><span style="line-height: 150%;">  -  XSS basado en DOM</span></strong>&nbsp;, donde la vulnerabilidad existe en el c&oacute;digo del lado del cliente en lugar del c&oacute;digo del lado del servidor.&nbsp;<span style="color: black; background: white;">El Document Object Model (DOM) es una interfaz de programaci&oacute;n para representar la estructura de un documento web y conectarlo con un lenguaje de scripting. En este sentido, el DOM facilita la estructura de documentos como HTML o XML y permite a los programas modificar la estructura, estilo y contenido del documento.</span></li>
                        </ul>
                        <p style="text-align: justify; line-height: 1.5;"><span style='color: black; font-size: 18px; background: white; font-family: "Times New Roman", Times, serif;'><br></span></p>
                        <p style='margin: 3pt 0cm 0cm; text-align: justify; line-height: 1.5; font-size: 16px; font-family: "Times New Roman", serif; '><span style='font-family: "Times New Roman", Times, serif; font-size: 18px;'>&iquest;C&oacute;mo podemos prevenir ataques XSS? La prevenci&oacute;n de secuencias de comandos entre sitios es trivial en algunos casos, pero puede ser mucho m&aacute;s dif&iacute;cil seg&uacute;n la complejidad de la aplicaci&oacute;n y la forma en que maneja los datos controlables por el usuario. En general, es probable que la prevenci&oacute;n eficaz de las vulnerabilidades XSS implique una combinaci&oacute;n de las siguientes medidas:</span></p>
                        <p style='margin: 3pt 0cm 0cm; text-align: justify; line-height: 1.5; font-size: 16px; font-family: "Times New Roman", serif; '><span style='font-family: "Times New Roman", Times, serif; font-size: 18px;'><br></span></p>
                        <ul>
                            <li style='text-align: justify; line-height: 1.5; font-family: "Times New Roman", Times, serif; font-size: 18px;'><strong>  -  Entrada de filtro a la llegada.&nbsp;</strong>En el punto donde se recibe la entrada del usuario, filtre lo m&aacute;s estrictamente posible en funci&oacute;n de lo que se espera o de la entrada v&aacute;lida.</li>
                            <li style='text-align: justify; line-height: 1.5; font-family: "Times New Roman", Times, serif; font-size: 18px;'><strong>  -  Codificar datos en la salida.&nbsp;</strong>En el punto donde los datos controlables por el usuario se emiten en las respuestas HTTP, codifique la salida para evitar que se interprete como contenido activo.&nbsp;Seg&uacute;n el contexto de salida, esto puede requerir la aplicaci&oacute;n de combinaciones de codificaci&oacute;n HTML, URL, JavaScript y CSS.</li>
                            <li style='text-align: justify; line-height: 1.5; font-family: "Times New Roman", Times, serif; font-size: 18px;'><strong>  -  Use encabezados de respuesta apropiados.&nbsp;</strong>Para evitar XSS en las respuestas HTTP que no est&aacute;n destinadas a contener HTML o JavaScript, puede usar los encabezados Content-Typey X-Content-Type-Optionspara asegurarse de que los navegadores interpreten las respuestas de la manera que desea.</li>
                            <li style='text-align: justify; line-height: 1.5; font-family: "Times New Roman", Times, serif; font-size: 18px;'><strong>  -  Pol&iacute;tica de seguridad de contenido.&nbsp;</strong>Como &uacute;ltima l&iacute;nea de defensa, puede usar la Pol&iacute;tica de seguridad de contenido (CSP) para reducir la gravedad de las vulnerabilidades XSS que a&uacute;n ocurren.</li>
                        </ul>
                    </div>
                    <a href="{{ url()->previous() }}" class="mt-2 ml-12 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition'">Volver</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>