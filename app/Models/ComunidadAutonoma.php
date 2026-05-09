<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComunidadAutonoma extends Model
{
    use HasFactory;
    protected $table = 'comunidades'; //Tabla de la base de datos
    public $timestamps = false;

    protected $fillable = ['nombre', 'slug', 'historia', 'imagen_logo', 'pos_x', 'pos_y']; //Los campos
    
    public function productos()
    {
        // Una comunidad tiene muchas cervezas
        return $this->hasMany(Producto::class);
    }
}
