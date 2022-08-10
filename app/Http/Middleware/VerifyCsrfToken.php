<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        '/retos/sqli/reto1',
        '/retos/sqli/reto2',
        '/retos/sqli/reto3',
        '/retos/comandos/reto1',
        '/retos/comandos/reto2',
        '/retos/codigo/reto1',
        '/retos/codigo/reto2',
        '/retos/xss/reto1',
        '/retos/xss/reto2',
        '/retos/xss/reto3',
        '/retos/csrf/reto1',
        '/retos/fuerzabruta/reto1',
    ];
}
