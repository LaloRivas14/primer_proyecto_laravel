<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class stock extends Model
{
    protected $fillable = [
        'producto_id',
        'color_id',
        'cantidad',
    ];
    protected $casts = [
        'cantidad' => 'integer',
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
