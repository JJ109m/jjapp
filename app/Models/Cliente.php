<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Identificacion;
use App\Models\Venta;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model
{
    use SoftDeletes;

    public function identificacion() {
    return $this->belongsTo(Identificacion::class);
    }

    public function ventacl() {
        return $this->belongsTo(Venta::class);
        }

    use HasFactory;
}
