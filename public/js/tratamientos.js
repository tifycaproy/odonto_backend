/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function fun_pregunta_tratamiento(v_id,v_ob) {
    alertify.confirm('Confirmacion de Borrado', '¿Quiere borrar este tratamiento?', function () {
        fun_eliminar_tratamiento(v_id, v_ob);
    }
    , function () {
        alertify.error('Acccion Cancelada');
    });
}

function fun_eliminar_tratamiento(id, obje) {
    axios.post('tratamientos/eliminar/' + id)
            .then(function (response) {
                console.log(response.data);
                if (response.data.success) {
                    alertify.success(response.data.message);
                    $("#" + obje + id).remove();
                } else {
                    $.each(response.data.message, function (idx, mes) {
                        alertify.error(mes[0]);
                    });
                }
            })
            .catch(function (er) {
                alertify.error('Error inesperado: ' + er);
            });
}

function fun_llamado_externo_componente($data){
    fun_mostrar_ocultar('div_tratamiento','i_bnt_tr');
    //de moneto solo recargamos
    document.location.reload();
}

function fun_mostrar_ocultar(objeto,clas){
    var visible = $("#"+objeto).toggle();
    var esVisible = visible.is(":visible");
    if(esVisible){
        $("#"+clas).removeClass("fa-plus").addClass("fa-minus");
    }else{
        $("#"+clas).removeClass("fa-minus").addClass("fa-plus");
    }
    
}

fun_mostrar_ocultar('div_tratamiento');