$(document).ready(function () {
    $('#actualizar_horario').click(function () {
        $.ajax({
            type: "POST",
            url: "control/control_agregar_horario.php",
            data: $('#formulario_ingresar_horario').serialize(),
            success: function (r) {
                if (r == 1) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Exito',
                        text: 'Se registro con exito el horario',
                    });
                    ver_horario();
                    return false;
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Opss',
                        text: 'Hubo un error al registrar el horario',
                    });
                    return false;
                }


            }

        });
    });


    $('#agregar_profesores').click(function () {
        $.ajax({
            type: "POST",
            url: "control/perfil_docente_horario.php",
            success: function (r) {
                $('#profesores').html(r);
                $('#profesores1').html(r);
                $('#profesores2').html(r);
                $('#profesores3').html(r);
                $('#profesores4').html(r);
            }

        });

    });


});

function ver_horario() {

    grupo = $('#grupo_buscar').val();
    semestre = $('#semestre_buscar').val();
    $('#actualizar_grupo').val(grupo);
    $('#actualizar_semestre').val(semestre);

    $.ajax({
        type: "POST",
        url: "control/buscar_horario.php",
        data: $('#buscar_horarios').serialize(),
        success: function (r) {

            $('#horario').html(r);
            $("#agregar_profesores").removeClass("invisible");

        }

    });
}