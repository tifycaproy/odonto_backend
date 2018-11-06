<?php

namespace App\ConfiguracionSistema;

use Illuminate\Database\Eloquent\Model;

class enfermedades extends Model
{
    public $timestamps = false;
    protected $table = 'enfermedades';
    protected  $primaryKey = 'id_enfermedad';
    protected $fillable = ['id_enfermedad','enfermedad'];
}
