/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function () {
    /*
     * Esto lo ejecuta el componente de VUE.JS
     $('#btn_crear_paciente').on('click', function (e) {
     var boton = $('#btn_crear_paciente');
     var text_boton = boton.html();
     boton.html('<i class="fa fa-spinner fa-spin"></i> Espere').prop("disabled", true);
     axios.post('/pacientes/', $("#frm_pacientes").serialize())
     .then(function (response) {
     console.log(response.data);
     if (response.data.success) {
     alertify.success(response.data.message);
     }else{
     $.each(response.data.message,function(idx,mes){
     alertify.error(mes[0]);
     });
     }
     })
     .catch(function (er) {
     alertify.error('Error inesperado: '+er);
     }).then(function(){
     boton.html(text_boton).prop("disabled", false);
     });
     
     });
     */

});
function fun_pregunta_paciente(v_id,v_ob) {
    alertify.confirm('Confirmacion de Borrado', '¿Quiere borrar este paciente?', function () {
        fun_eliminar_paciente(v_id, v_ob);
    }
    , function () {
        alertify.error('Acccion Cancelada');
    });
}

function fun_eliminar_paciente(id, obje) {
    axios.post('pacientes/eliminar/' + id)
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