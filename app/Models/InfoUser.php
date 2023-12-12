<?php

namespace App\Models;

use DateTimeZone;
use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoUser extends Model
{
    use HasFactory;


    protected $table = 'info_user';

    protected $fillable = [
        'edad',
        'correo_personal',
        'sexo',
        'documento',
        'estado_civil',
        'departamento_residencia',
        'municipio_residencia',
        'direccion_residencia',
        'rh',
        'fecha_nacimiento',
        'telefono',
        'user_id',
        'identificacions_id',
    ];
    public function getAge()
    {
        if ($this->fecha_nacimiento) {
            return \Carbon\Carbon::parse($this->fecha_nacimiento)->age;
        }

        return null;
    }


    public function identificacion()
    {
        return $this->belongsTo(Identificacion::class, 'identificacions_id');
    }



    public function departamento()
    {
        return $this->belongsTo(Departamento::class, 'departamentos_id');
    }

    public function municipio()
    {
        return $this->belongsTo(Municipio::class, 'municipios_id');
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
