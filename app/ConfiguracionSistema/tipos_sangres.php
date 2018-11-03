<?php

namespace App\ConfiguracionSistema;

use Illuminate\Database\Eloquent\Model;

class tipos_sangres extends Model
{
    public $timestamps = false;
    protected $table = 'tipos_sangres';
    protected $fillable = ['id_tipo_sangre','tipo_sangre'];
}
