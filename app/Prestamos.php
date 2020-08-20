<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestamos extends Model
{
    protected $fillable = [
        'codigoDelPrestamo',
        'equipoPrestado',
        'serial',
        'canal',
        'prestamo',
        'mes',
        'devolucionEstamada',
        'realDevolucion',
        'devuelto',
        'estadoReal',
        'diasTranscurridos',
        'observaciones'
    ];
}


