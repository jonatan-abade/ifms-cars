<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function carros()
    {
        return $this->hasMany(Carro::class);
    }

    public function motos()
    {
        return $this->hasMany(Moto::class);
    }
}
