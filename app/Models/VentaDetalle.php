<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VentaDetalle extends Model
{
        public function producto()
    {
        return $this->belongsTo(Producto::class);
    }

    protected $fillable = [
        'ventas_id',
        'producto_id',
        'cantidad',
        'precio',
        'descuento',
        'subtotal',
        // Agrega aquí todos los campos necesarios para la tabla venta_detalle
    ];

    public function venta()
    {
        return $this->belongsTo(Ventas::class);
    }
    public function variante()
    {
        return $this->belongsTo(Variant::class);
    }

    use HasFactory;
}
