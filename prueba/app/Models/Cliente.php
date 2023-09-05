<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'clientes';
    public $timestamps = false;


    protected $fillable = [
        'idcliente',
        'nombre',
        'idciudad',
        'direccion',
        'telefono',
        'creado',
        'estado'
    ];
}
