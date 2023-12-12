<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function infoUser()
    {
        return $this->belongsTo(InfoUser::class);
    }

    public function departamento()
    {
        return $this->belongsTo(Departamento::class, 'departamento_id'); // Reemplaza 'departamentos_id' por el nombre correcto de la columna
    }



}
