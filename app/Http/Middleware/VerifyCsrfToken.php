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
        //'/retos/sqli/reto4',

    ];
}
