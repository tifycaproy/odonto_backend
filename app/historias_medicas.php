<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class historias_medicas extends Model {

    public $timestamps = false;
    protected $table = 'historias_medicas';
    protected $primaryKey = 'id_historia_medica';
    protected $fillable = ['id_historia_medica', 'id_paciente', 'ultima_consulta_medica',
        'motivo_medica', 'ultima_consulta_odontologica', 'motivo_odontologica',
        'bajo_tratamiento', 'cual_tratamiento', 'toma_medicina', 'nombre_medicina',
        'hospitalizado', 'causa_hospitalizacion', 'embarazada', 'problema_anestesico_dental',
        'alergia_m', 'alergia_medicamentos', 'alergia_a', 'alergia_alimentos'];

}
