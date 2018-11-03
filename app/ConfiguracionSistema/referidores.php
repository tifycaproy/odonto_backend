<?php

namespace App\ConfiguracionSistema;

use Illuminate\Database\Eloquent\Model;

class referidores extends Model
{
    public $timestamps = false;
    protected $table = 'referidores';
    protected  $primaryKey = 'id_referido';
    protected $fillable = ['id_referidor','referidor'];
}
