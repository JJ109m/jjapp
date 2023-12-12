<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingresos extends Model
{
    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class)
                    ->withCount('ingresos');;

    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function getColorAttribute()
    {
        switch ($this->estado) {
            case 'borrador':
                return '#9999ff';
            case 'completo':
                return '#009B7D';
            case 'cancelado':
                return 'red';
            default:
                return '#ffd200';
        }
    }

    use HasFactory;
}
