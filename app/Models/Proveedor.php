<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Proveedor extends Model
{
    use SoftDeletes;
    protected $table = 'proveedors';

    public function ingresos() {
        return $this->hasMany(Ingresos::class);
    }

    public function variant() {
        return $this->hasMany(Variant::class);
    }

    public function producto() {
        return $this->hasMany(Producto::class);
    }
    use HasFactory;
}
