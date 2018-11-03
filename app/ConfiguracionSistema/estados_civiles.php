<?php

namespace App\ConfiguracionSistema;

use Illuminate\Database\Eloquent\Model;

class estados_civiles extends Model
{
    public $timestamps = false;
    protected $table = 'estados_civiles';
    protected  $primaryKey = 'id_estado_civil';
    protected $fillable = ['id_estado_civil','estado_civil'];
}
