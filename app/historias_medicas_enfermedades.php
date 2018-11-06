<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class historias_medicas_enfermedades extends Model
{
    public $timestamps = false;
    protected $table = 'historias_medicas_enfermedades';
    protected $primaryKey = 'id_historia_medica_enfermedad';
    protected $fillable = ['id_historia_medica_enfermedad','id_historia_medica','id_enfermedad'];
}
