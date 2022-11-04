$(document).ready(function(){
   precarga_datos();

   $('#btn_actualizar_semestre').click(function(){
        if($('#ciclo_actualizado').val()==''){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'El campo de Ciclo Escolar esta vacio',
            });
            return false;
        }else if($('#actualiza_semestre1').val()==""){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'No sea seleccionado un Semnestre',
            });
            return false;

        }else if($('#actualiza_semestre2').val()==""){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'No sea seleccionado un Semnestre',
            });
            return false;

        }else if($('#actualiza_semestre3').val()==""){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'No sea seleccionado un Semnestre',
            });
            return false;

        }
        $.ajax({
            type: "POST",
            data: $('#datos_semestre').serialize(),
            url: 'control/control_actualiza_semestre.php',
            success: function(r) {
                if (r == 1) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Exito',
                        text: 'Se han avtualizado los semstres de los estudiantes',
                    });
                    precarga_datos();
                    return false;
                    
                } else {
                    
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'No se pudo actualizar los semestres de los estudiantes',
                    });
                    return false;
                }
            }
        });

   })
    


});    

function precarga_datos(){
    $.ajax({
        type: "POST",
        url: 'control/precarga_datos_semestre.php',
        success: function(r) {
            $('#mostrar_tabla').html(r);
        }
    });
}