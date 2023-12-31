<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;

    public function infoUser()
    {
        return $this->belongsTo(InfoUser::class);
    }

    public function municipios()
    {
        return $this->hasMany(Municipio::class);
    }


}
