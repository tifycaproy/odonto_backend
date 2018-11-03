<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{

	public $timestamps = false;
	protected $table = 'pacientes';
	protected  $primaryKey = 'id_paciente';
	protected $fillable = [ 'id_paciente','identificacion','nombres','apellidos',
                                'fecha_nacimiento','edad','telefono','celular','email',
                                'direccion','seguro_medico','nss','nombre_emergencia',
                                'telefono_emergencia','menor',
                                //campos dependientes de otras tablas
                                'id_pais','id_parentesco','id_tipo_sangre','id_estado_civil',
                                'id_sexo','id_ocupacion','id_referidor','id_pais'];
        
}