<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'comunidad_id',
        'nombre',
        'descripcion',
        'precio',
        'stock',
        'imagen',
    ];

    public function comunidadAutonoma()
    {
        return $this->belongsTo(ComunidadAutonoma::class, 'comunidad_id');
    }
}