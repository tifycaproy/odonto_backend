<?php

namespace App\Administracion;

use Illuminate\Database\Eloquent\Model;

class tratamientos_categorias extends Model {

    public $timestamps = false;
    protected $table = 'tratamientos_categorias';
    protected $primaryKey = 'id_tratamiento_categoria';
    protected $fillable = ['id_tratamiento_categoria', 'tratamiento_categoria'];

}
