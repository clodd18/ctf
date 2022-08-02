<?php

namespace App\Rules;

use App\Models\Reto;
use Illuminate\Contracts\Validation\Rule;

class FlagCheck implements Rule
{
    private $reto;

    public function __construct(Reto $reto)
    {
        $this->reto = $reto->flag;
    }

    public function passes($attribute, $value)
    {
        return $value == $this->reto;
    }

    public function message()
    {
        return 'El flag introducido no es el correcto.';
    }
}
