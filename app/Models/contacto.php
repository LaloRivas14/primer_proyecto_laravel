<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class contacto extends Model
{
    protected $fillable = [
        'nombre',
        'email',
        'telefono',
        'mensaje',
        'estado',
    ];

    protected $casts = [
        'estado' => 'string',
    ];
}
