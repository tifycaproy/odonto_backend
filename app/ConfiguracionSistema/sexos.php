<?php

namespace App\ConfiguracionSistema;

use Illuminate\Database\Eloquent\Model;

class sexos extends Model
{
    public $timestamps = false;
    protected $table = 'sexos';
    protected  $primaryKey = 'id_sexo';
    protected $fillable = ['id_sexo','sexo'];
}
