<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{

    //
    public $timestamps = false; 
    protected $table = 'pacientes';
    public $fillable = ['id','nombres','apellidos'];
    
}
