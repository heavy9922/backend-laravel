<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    protected $fillable = [
        'seccion',
        'posicion',
        'estado',
        'producto',
        'pid',
        'serial',
        'codigo',
        'canal',
        'observaciones'
    ];
}
