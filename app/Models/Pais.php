<?php

namespace App\Models;

use App\Models\Pais;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    protected $fillable = [
        'codpais','nompais'
    ];
    use HasFactory;

    public function Pais()
    {
        return $this->hasMany(User::class,"id_pais");
    }
}