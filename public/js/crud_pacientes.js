/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).on('ready', function (e) {
    $("#respuesta").html("").hide();

    $('#btn_crear_paciente').on('click', function (e) {
        // var datos_paciente = ;

        axios.post('/pacientes/', $("#frm_pacientes").serialize())
                .then(function (response) {
                    console.log(response.data);
                    if (response.data.success) {
                        // alert(response.data.message);

                        $("#respuesta").html(response.data.message).show().fadeOut(5000);
                        //alertify.success('Success message');
                    }
                    //alertify.success(response.data.message);
                })
                .catch(function (error) {
                    console.log(error);
                });

    });


});