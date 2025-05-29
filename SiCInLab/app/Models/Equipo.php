<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;

    protected $table = 'EQUIPOS';
    protected $primaryKey = 'IdEquipo';
    public $timestamps = false;

    protected $fillable = [
        'Nombre',
        'Cantidad',
        'Descripcion',
        'TipoEquipo'
    ];
}
