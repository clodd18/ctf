<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reto extends Model
{
    use HasFactory;

    /*protected $fillable = [
        'nombre',
        'descripcion',
        'categoria',
        'enlace',
        'flag',
    ];*/

    protected $guarded = [];
}
