<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reclamaciones extends Model
{
    protected $fillable = [
        'tipo_tienda','monto','descripcion','tipo_reclamo','pedido',
        'detalle_reclamo','id_users'
    ];
    use HasFactory;
}