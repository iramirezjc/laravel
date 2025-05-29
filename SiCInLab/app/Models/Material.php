<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    //
    use HasFactory;

    protected $table = 'MATERIALES';
    protected $primaryKey = 'IdMaterial';
    public $timestamps = false;

    protected $fillable = [
        'Nombre',
        'Capacidad',
        'Cantidad',
        'Marca',
        'IdUnidad',
    ];

    public function Unidad() {
        return $this->belongsTo(Unidad::class, 'IdUnidad');
    }
}
