/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function () {

   // $("#respuesta").html("").hide();
   //alertify.success("ete es el mensaje de defecto");

    $('#btn_crear_paciente').on('click', function (e) {
        // var datos_paciente = ;

        axios.post('/pacientes/', $("#frm_pacientes").serialize())
                .then(function (response) {
                  //  console.log(response.data);
                    if (response.data.success) {
                        alertify.success(response.data.message);
                    }

                })
                .catch(function (error) {
                    console.log(error);
                }).then(function (response) {
                    alertify.success("Esperando Respuesta");
                });

    });


});