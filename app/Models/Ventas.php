<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;




class Ventas extends Model
{
    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }
    protected $table = 'Ventas';
    public function ventadetalles()
    {
        return $this->hasMany(VentaDetalle::class);
    }

    protected $fillable = [
        'serie',
        'fecha_venta',
        'nombre_cliente',
        'telefono_cliente',
        'direccion',
        'total_pagar',
        'estado',
        'usuario_id',
    ];


    public function getColorAttribute()
    {
        switch ($this->estado) {
            case 'borrador':
                return '#7859df';
            case 'completo':
                return '#06bd87';
            case 'cancelado':
                return '#ff002b';
            default:
                return '#ffaf00';
        }
    }

    use HasFactory;
}
