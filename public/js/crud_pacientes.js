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
*/
    });


});