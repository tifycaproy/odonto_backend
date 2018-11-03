<?php

namespace App\ConfiguracionSistema;

use Illuminate\Database\Eloquent\Model;

class parentescos extends Model
{
    public $timestamps = false;
    protected $table = 'parentescos';
    protected  $primaryKey = 'id_parentesco';
    protected $fillable = ['id_parentesco','parentesco'];
}
