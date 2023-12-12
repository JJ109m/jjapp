<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Blog;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categoria extends Model
{
    use SoftDeletes;
    public function blogs() {
        return $this->hasMany(Blog::class);
    }
    public function productos() {
        return $this->hasMany(Producto::class);
    }
}

