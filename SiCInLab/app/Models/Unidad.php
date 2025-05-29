<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    //
    use HasFactory;

    protected $table = 'UNIDADES';
    protected $primaryKey = 'IdUnidad';

    protected $fillable = [
        'IdUnidad',
        'Nombre',
    ];
}
