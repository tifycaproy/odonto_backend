<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tratamientos extends Model {

    public $timestamps = false;
    protected $table = 'tratamientos';
    protected $primaryKey = 'id_tratamiento';
    protected $fillable = ['id_tratamiento','id_paciente', 'nombre_tratamiento',
        'fecha_creado', 'id_odontologo'];

}
