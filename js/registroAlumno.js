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
        } else if ($('#semestre').val() === "") {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'El campo de Semstre esta vacio',
            });
            return false;

        } else if ($('#carrera').val() === '') {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'El campo de Carrera esta vacio',
            });
            return false;
        
        }else if($('#grupo').val()==""){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'El campo de Grupo esta vacio',
            });
            
            return false;
        }else if($('#matricula').val()==""){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'El campo de Matricula esta vacio',
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
        }


        $.ajax({
            type: 'POST',
            data: $('#registrarAlumno').serialize(),
            url: 'control/control_registro_alumno.php',
            success: function(r) {
                if (r == 1) {
                    $('#registrarAlumno')[0].reset();
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