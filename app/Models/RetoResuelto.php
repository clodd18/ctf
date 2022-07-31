<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RetoResuelto extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'vulnerabilidad_id',
    ];
}
