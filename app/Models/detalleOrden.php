<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class detalleOrden extends Model
{
    protected $fillable = [
        'orden_id',
        'producto_id',
        'talle_id',
        'cantidad',
        'precio_unitario',
        'subtotal',
    ];

    protected $casts = [
        'cantidad' => 'integer',
        'precio_unitario' => 'decimal:2',
        'subtotal' => 'decimal:2',
    ];

    public function orden()
    {
        return $this->belongsTo(ordene::class);
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
