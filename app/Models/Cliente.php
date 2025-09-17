<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipo_documento',
        'numero_documento',
        'nombre',
        'direccion',
        'ciudad',
        'cedula',
        'telefono'
    ];

    public function ventas()
    {
        return $this->hasMany(Venta::class);
    }
}
