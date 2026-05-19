<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ordene extends Model
{
    protected $fillable = [
        'producto_id',
        'estado',
        'total',
        'subtotal',
        'envio',
        'metodo_pago',
    ];

    protected $casts = [
        'total' => 'decimal:2',
        'subtotal' => 'decimal:2',
        'envio' => 'decimal:2',
    ];

    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }
}
