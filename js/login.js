$(document).ready(function(){
    $('#enviar').click(function() {
        if($('#nombre').val()===''){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Algun campo esta vacio',
            });
           } else if($('#contraseña').val()===''){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Algun campo esta vacio',
            });
           }
        $.ajax({
            type: "POST",
            url: "control/control_entrada.php", //archivo que valida los datos 
            data: $('#ingreso').serialize(),
            success: function(r) {
                if (r == 1) {
                    window.location = "menu";
                    console.log(r);
                }else{
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Usuario o contraseña no encontrado',
                    });
                    console.log(r);
                }
            }
        })
    });
});