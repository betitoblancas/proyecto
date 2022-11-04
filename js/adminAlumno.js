$(document).ready(function() {

    $('#registro-list').click(function() {
        let clase = document.getElementById("horariOpcion");
        clase.classList.remove("active");
        clase.classList.remove("show");
        let clase1 = document.getElementById("informacion");
        clase1.classList.remove("active");
        clase1.classList.remove("show");
    });

    $('#btnregistrar').click(function() {
        console.log("sadsa");
        if ($('#nombre').val() === '') {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'El campo de Nombre esta vacio',
            });
            return false;
        } else if ($('#apellidoP').val() === '') {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'El campo de Apellido Paterno esta vacio',
            });
            return false;

        } else if ($('#apellidoM').val() === '') {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'El campo de Apeliido Materno esta vacio',
            });
            return false;
        } else if ($('#grado').val() === '') {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'El campo de Grado esta vacio',
            });
            return false;
        } else if ($('#grupo').val === '') {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'El campo de Grupo esta vacio',
            });
            return false;

        } else if ($('#password').val() === '') {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'El campo de Contraseña esta vacio',
            });
            return false;
        } else if ($('#matricula').val() === '') {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'El campo de matricula esta vacio',
            });
            return false;
        } else if ($('#semestre').val() === '') {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'El campo de Semestre esta vacio',
            });
            return false;
        } else if ($('#carrera').val() === '') {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'El campo de Carrera esta vacio',
            });
            return false;
        }

        console.log($('#registrarAlumno').serialize());

        datos = "n=" + $('#nombre').val() +
            "&aP=" + $('#apellidoP').val() +
            "&aM=" + $('#apellidoM').val() +
            "&g=" + $('#grupo').val() +
            "&go=" + $('#grado').val() +
            "&s=" + $('#semestre').val() +
            "&m=" + $('#matricula').val() +
            "&p=" + $('#password').val() +
            "&c=" + $('#carrera').val();
        $.ajax({
            type: "POST",
            url: 'control/control_registro.php',
            data: datos,
            cache: false,
            success: function(r) {
                if (r = 1) {
                    $('#registrarAlumno')[0].reset();
                    Swal.fire({
                        icon: 'success',
                        title: 'Registro completado con exito.',
                    });
                    return false;
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Algo salio mal',
                    });
                    return false;
                }
            }
        });
    });

});

function borrar_info_alumno(id) {

    Swal.fire({
        title: 'Seguro de este cambio?',
        text: "Esto ya no se podra cambiar!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, borrar!'
    }).then((result) => {
        $.ajax({
            type: 'POST',
            url: 'control/control_eliminar_alumno.php',
            data: 'id=' + id,
            success: function(r) {
                if (r == 1) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Registro se elimino con exito.',
                    });
                    mostrar_datos();

                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Registro completado con exito.',
                    });

                    return false;


                }
            }
        });


    }).catch(err => console.log(err))

}

document.getElementById("buscar").addEventListener("keyup", mostrar_datos)

function mostrar_datos() {
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
            $('#actualiza_grado').val(datos_precarga['grado']);
            $('#actualiza_matricula').val(datos_precarga['matricula']);
            $('#actualiza_contra').val(datos_precarga['password']);


        }
    });
}