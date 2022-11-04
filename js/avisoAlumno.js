  $(document).ready(function() {
    $('#seleccionar-todos ').change(function() {
      $('#correo_aviso_alumno input[type=checkbox]').prop('checked', $(this).is(':checked'));

    });
    
    $('#tabla_aviso_alumno ').change(function() {
      $('#seleccionar-todos').prop('checked', false);
      
    });

    $('#enviar_correo_alumno').click(function(){
      

      var datos= $('#correos').serialize() +
                 "&asunto=" + $('#asunto_correo').val()+
                 "&mensaje=" + $('#mensaje_alumno').val();
      
      $.ajax({
        type:"POST",
        url:"control/correo_alumno.php",
        data: datos ,
        
        success: function(r){
          if(r=true){
            Swal.fire({
              icon: 'success',
              title: 'Exito',
              text: 'Se han enviado con exito los correos',
          });
          $('#asunto_correo').val('');
          $('#mensaje_alumno').val('');
          return false;

          }else{
            Swal.fire({
              icon: 'error',
              title: 'Sin exito',
              text: 'ALguno error al enviar el correo',
          });
          
          return false;

          }
        }

      });
    });



    mostrar_alumno_aviso();

    
  });
  document.getElementById("buscar_alumno_aviso").addEventListener("keyup", mostrar_alumno_aviso);

  function mostrar_alumno_aviso(){
    $.ajax({
      type: "POST",
      url: 'control/control_correos_alumnos.php',
      data:"buscar="+ $('#buscar_alumno_aviso').val(),
      success: function(r) {
          $('#tabla_aviso_alumno').html(r);
      }
  });
  }