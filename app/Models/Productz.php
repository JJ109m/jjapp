<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productz extends Model
{
    public function variants()
{
    return $this->hasMany(Variant::class);
}

    use HasFactory;
}
