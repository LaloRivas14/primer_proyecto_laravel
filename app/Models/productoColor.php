<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class productoColor extends Model
{
    protected $table = 'producto_colors';

    protected $fillable = [
        'producto_id',
        'color_id',
    ];

    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }

    public function color()
    {
        return $this->belongsTo(Color::class);
    }
}
