<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Cliente;

class Identificacion extends Model
{
    public function clientes() {
        return $this->hasMany(Cliente::class)
                    ->withCount('identificacion');;
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function infoUser()
{
    return $this->belongsTo(InfoUser::class);
}


    use HasFactory;
}
