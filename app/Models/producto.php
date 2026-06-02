<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = [
        'nombre',
        'slug',
        'descripcion',
        'precio',
        'imagen_principal',
        'estado',
        'categoria_id'
    ];

    protected $casts = [
        'estado' => 'boolean',
        'precio' => 'decimal:2',
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
