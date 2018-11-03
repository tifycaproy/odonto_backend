<?php

namespace App\ConfiguracionSistema;

use Illuminate\Database\Eloquent\Model;

class paises extends Model
{
    public $timestamps = false;
    protected $table = 'paises';
    protected  $primaryKey = 'id_pais';
    protected $fillable = ['id_pais','pais'];
}
