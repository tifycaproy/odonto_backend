<?php

namespace App\Administracion;

use Illuminate\Database\Eloquent\Model;

class tratamientos_disponibles extends Model
{
      public  $timestamps = false;
    protected $table = 'tratamientos_disponibles';
    protected $primaryKey = 'id_tratamiento_disponible';
    protected $fillable = ['id_tratamiento_disponible','tratamiento_disponible',
                            'tratamiento_descripcion','costo_tratamiento',
                            'id_tratamiento_categoria'];
}
