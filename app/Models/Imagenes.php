<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class imagenes extends Model
{
    protected $table = 'imagenes';
    protected $fillable = ['ruta'];

    use HasFactory;
}
