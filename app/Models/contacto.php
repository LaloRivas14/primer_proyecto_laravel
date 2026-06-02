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
        'respondido',
    ];

    protected $casts = [
        'respondido' => 'boolean',
    ];
}
