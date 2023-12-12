<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;


class Producto extends Model
{
    use SoftDeletes;
    use Notifiable;

    protected $casts = [
        'imagenes' => 'array'
    ];


    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }
    public function ventas()
    {
        return $this->hasMany(Ventas::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function venta_detalles()
    {
        return $this->hasMany(VentaDetalle::class);
    }

    public function variants()
    {
        return $this->hasMany(Variant::class, 'product_id');
    }
    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class);
    }

    public function getTotalStock()
    {
        // Suma la cantidad de stock de todas las variantes asociadas a este producto
        return $this->variants->sum('stock');
    }

    use HasFactory;
}
