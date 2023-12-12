<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Variant extends Model
{
    use SoftDeletes;
    use Notifiable;
    protected $table = 'variantes';

    use HasFactory;

    protected $fillable = [
        'product_id',
        'imagen',
        'combination',
        'precio',
        'stock',
        'stock2',
        'sku',
        'peso',
        'estado',
    ];

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'product_id');
    }

    // Relación con la tabla 'tarjeta_variants'
    public function tarjetaVariant()
    {
        return $this->belongsTo(TarjetaVariant::class);
    }

    public function ventadetalles()
    {
        return $this->hasMany(VentaDetalle::class);
    }
}
