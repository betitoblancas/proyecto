$(document).ready(function() {
    $('#alumno').click(function() {
        Swal.fire({
            icon: 'info',
            title: 'Oops...',
            text: 'recomnedaciondes alumnos',
        });
    });

    $('#docente').click(function() {
        Swal.fire({
            icon: 'info',
            title: 'Oops...',
            text: 'recomnedacion de docentes',
        });
    });

    $('#enviar').click(function() {
        $.ajax({
            type: "POST",
            url: 'control/envioemail.php', //archivo que valida los datos de los estudiantes
            data: $('#formensaje').serialize(),
            success: function(r) {
                r = 1; //prueba
                if (r == 1) {
                    console.log(r);
                    alert("todocorrecto xd");
                    console.log(r);
                } else {
                    alert("nada correcto");
                    console.log(r);

                }
            }
        });

    });
});