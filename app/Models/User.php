<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;

use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'users';

    protected $fillable = [
        'name',
        'email',
        'email_verified_at',
        'password',
        'remember_token',
        'created_at',
        'updated_at',
        'profile_image',
        'deleted_at',
        'tipo_estado',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function venta()
    {
        return $this->hasMany(Ventas::class , 'usuario_id');
    }

    public function ingresos()
    {
        return $this->hasMany(Ingresos::class , 'user_id');
    }

    // User.php

    public function productos()
    {
        return $this->hasMany(Producto::class, '');
    }


    public function infoUser()
    {
        return $this->hasOne(InfoUser::class, 'user_id');
    }

    public function identificacions()
    {
        return $this->belongsTo(Identificacion::class);
    }

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getColorAttribute()
    {
        switch ($this->tipo_estado) {
            case 'Incativo':
                return '#9999ff';
            case 'Activo':
                return '#009B7D';
        }
    }
}
