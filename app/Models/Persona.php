<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Persona extends Model
{
    protected $fillable = [
        'nombre','apellido','dni','dnacimiento','telefono_casa','direccion','sexo','id_users'
    ];
    use HasFactory;
    
    public function User()
    {   
        return $this->belongsTo(User::class,'id_users');
    }
}