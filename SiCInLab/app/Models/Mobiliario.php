<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobiliario extends Model
{
    //
    use HasFactory;

    protected $table = 'MOBILIARIO';
    protected $primaryKey = "IdMobiliario";
    public $timestamps = false;

    protected $fillable = [
        'Nombre',
        'Cantidad',
        'Descripcion',
        'Material'
    ];

}
