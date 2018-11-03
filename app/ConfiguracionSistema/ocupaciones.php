<?php

namespace App\ConfiguracionSistema;

use Illuminate\Database\Eloquent\Model;

class ocupaciones extends Model
{
    public $timestamps = false;
    protected $table = 'ocupaciones';
    protected  $primaryKey = 'id_ocupacion';
    protected $fillable = ['id_ocupacion','ocupacion'];
}
