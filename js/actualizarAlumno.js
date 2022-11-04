$(document).ready(function() {
    mostrar_datos_alumno();
    $('#actualiza_datos_alumno').click(function() {
        if ($('#actualiza_nombre').val() == "") {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'El campo de Nombre esta vacio',
            });
            return false;
        } else if ($('#actualiza_paterno').val() == "") {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'El campo de Apellido Paterno esta vacio',
            });
            return false;
        } else if ($('#actualiza_materno').val() == "") {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'El campo de Apellido Materno esta vacio',
            });
            return false;
        } else if ($('#actualiza_carrera').val() == "") {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'El campo de Carrera esta vacio',
            });
            return false;
        } else if ($('#actualiza_grupo').val === '') {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'El campo de Grupo esta vacio',
            });
            return false;

        } else if ($('#actualiza_contra').val() === '') {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'El campo de Contraseña esta vacio',
            });
            return false;
        } else if ($('#actualiza_matricula').val() === '') {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'El campo de matricula esta vacio',
            });
            return false;
        } else if ($('#actualiza_semestre').val() === '') {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'El campo de Semestre esta vacio',
            });
            return false;
        }


        $.ajax({
            type: 'POST',
            data: $('#formulario_actualiza_alumno').serialize(),
            url: 'control/control_actualizar_alumno.php',
            success: function(r) {
                if (r == 1) {
                    mostrar_datos_alumno();
                    Swal.fire({
                        icon: 'success',
                        title: 'Exito',
                        text: 'El registro fue actualizado con exito',
                    });
                    return false;
                } else {
                    
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'No se pudo actualizar el registro',
                    });
                    return false;
                }
            }
        });


    });
});

document.getElementById("buscar").addEventListener("keyup", mostrar_datos_alumno)

function mostrar_datos_alumno() {
    $.ajax({
        type: "POST",
        url: 'control/control_perfil_alumno.php',
        data: $('#buscar_estudiante').serialize(),

        success: function(r) {
            $('#mostrar_datos_alumnos').html(r);
        }
    });
}

function precarga_alumno(id) {
    $.ajax({
        type: 'POST',
        data: "id_alumno=" + id,
        url: 'control/precarga_datos_alumno.php',
        success: function(r) {

            //convertimos r a un objeto json valido
            datos_precarga = jQuery.parseJSON(r);

            $('#actualiza_id').val(datos_precarga['id_alumno']);
            $('#actualiza_nombre').val(datos_precarga['nombre']);
            $('#actualiza_paterno').val(datos_precarga['apellido_paterno']);
            $('#actualiza_materno').val(datos_precarga['apellido_materno']);
            $('#actualiza_carrera').val(datos_precarga['carrera']);
            $('#actualiza_semestre').val(datos_precarga['semestre']);
            $('#actualiza_grupo').val(datos_precarga['grupo']);
            $('#actualiza_correo').val(datos_precarga['correo']);
            $('#actualiza_matricula').val(datos_precarga['matricula']);
            $('#actualiza_contra').val(datos_precarga['password']);


        }
    });
}

function borrar_info_alumno(id){
    Swal.fire({
        title: '¿Esta seguro de eliminar registro?',
        text: "Esta accion no se puede revertir!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, borrar!',
        cancelButtonText: 'Cancelar'
      }).then((result) => {
        if (result.isConfirmed) {   
            $.ajax({
                type:'POST',
                data:"id_alumno="+id,
                url:"control/control_eliminar_alumno.php",
                success:function(r){
                    if(r==1){
                        mostrar_datos_alumno();
                        Swal.fire({
                            icon: 'success',
                            title: 'Exito',
                            text: 'El registro fue eliminado con exito',
                        });
                        return false;

                    }else{
                        Swal.fire({
                            icon: 'error',
                            title: 'Opsss..',
                            text: 'El hubo un problema con la eliminacion del registro',
                        });
                        return false;
                    } 
                }
            });
        }
      })
}