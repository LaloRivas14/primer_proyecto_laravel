<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class stock extends Model
{
    protected $fillable = [
        'producto_id',
        'color_id',
        'cantidad',
        'talle_id',
    ];
    protected $casts = [
        'cantidad' => 'integer',
    ];

    public function talle()
    {
        return $this->belongsTo(Talle::class);
    }
    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }

    public function color()
    {
        return $this->belongsTo(Color::class);
    }
}
