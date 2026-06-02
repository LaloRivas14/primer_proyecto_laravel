<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Personalizado extends Model
{
    protected $table = 'personalizados';

    protected $fillable = [
        'user_id',
        'producto_id',
        'talle_id',
        'categoria_id',
        'descripcion',
        'imagen_referencia',
        'cantidad',
        'precio_estimado',
        'estado',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }

    public function talle()
    {
        return $this->belongsTo(Talle::class);
    }
}
