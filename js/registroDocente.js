$(document).ready(function() {
    $('#btnregistrar').click(function() {
        if ($('#nombre').val() == "") {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'El campo de Nombre esta vacio',
            });
            return false;
        } else if ($('#apellidoP').val() == "") {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'El campo de Apellido Paterno esta vacio',
            });
            return false;
        } else if ($('#apellidoM').val() == "") {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'El campo de Apellido Materno esta vacio',
            });
            return false;
        }else if($('#password').val()==""){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'El campo de Contraseña esta vacio',
            });
            return false;   
        }else if($('#correo').val()==""){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'El campo de Correo esta vacio',
            });
            return false;
        }else if($('#clave').val()==""){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'El campo de la Clave del trabajador esta vacia',
            });
            
            return false;
        }


        $.ajax({
            type: 'POST',
            data: $('#registrarDocente').serialize(),
            url: 'control/control_registro_docente.php',
            success: function(r) {
                if (r == 1) {
                    $('#registrarDocente')[0].reset();
                    Swal.fire({
                        icon: 'success',
                        title: 'Exito',
                        text: 'El registro fue registrado con exito',
                    });
                    return false;
                } else {
                    
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'No se pudo registrar el registro',
                    });
                    return false;
                }
            }
        });


    });
    
});