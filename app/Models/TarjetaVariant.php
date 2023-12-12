<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TarjetaVariant extends Model
{
    protected $fillable = ['nombreVariante', 'tags'];

    // Relación con la tabla 'variants'
    public function variants()
    {
        return $this->hasMany(Variant::class);
    }
    
    use HasFactory;
}
