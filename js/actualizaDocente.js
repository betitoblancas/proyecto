$(document).ready(function() {
    mostrar_datos();
    $('#actualiza_docente').click(function() {
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
        } else if ($('#actualiza_clave').val() == "") {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'El campo del Clave de trabajador esta vacio',
            });
            return false;

        } else if ($('#actualiza_contra').val() === '') {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'El campo de Contraseña esta vacio',
            });
            return false;
        
        }else if($('#actualiza_correo').val()===""){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'El campo de Correo esta vacio',
            });
            return false;
        }


        $.ajax({
            type: 'POST',
            data: $('#formulario_actualiza_docente').serialize(),
            url: 'control/control_actualizar_docente.php',
            success: function(r) {
                if (r == 1) {
                    mostrar_datos();
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

document.getElementById("buscar").addEventListener("keyup", mostrar_datos);

function mostrar_datos() {
    $.ajax({
        type: "POST",
        url: 'control/control_perfil_docente.php',
        data: $('#buscar_docente').serialize(),

        success: function(r) {
            $('#mostrar_datos_docente').html(r);
        }
    });
}

function precarga_docente(id) {
    $.ajax({
        type: 'POST',
        data: "id_docente=" + id,
        url: 'control/precarga_datos_docente.php',
        success: function(r) {

            //convertimos r a un objeto json valido
            datos_precarga = jQuery.parseJSON(r);

            $('#actualiza_id_docente').val(datos_precarga['id_docente']);
            $('#actualiza_nombre').val(datos_precarga['nombre']);
            $('#actualiza_paterno').val(datos_precarga['apellido_paterno']);
            $('#actualiza_materno').val(datos_precarga['apellido_materno']);
            $('#actualiza_correo').val(datos_precarga['correo']);
            $('#actualiza_clave').val(datos_precarga['clave_trabajador']);
            $('#actualiza_contra').val(datos_precarga['password']);


        }
    });
}

function borrar_info_docente(id){
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, eliminar registro!',
        cancelButtonText: 'No, cancelar'
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            type:'POST',
            data:"id_docente="+id,
            url:"control/control_eliminar_docente.php",
            success:function(r){
                if(r==1){
                    mostrar_datos();
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

          })
        }
      })
}