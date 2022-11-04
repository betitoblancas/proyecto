$(document).ready(function() {
  $('#seleccionar-todos ').change(function() {
    $('#correo_aviso_docente input[type=checkbox]').prop('checked', $(this).is(':checked'));

  });
  
  $('#tabla_aviso_docente').change(function() {
    $('#seleccionar-todos').prop('checked', false);
    
  });

   $('#enviar_correo_docente').click(function(){
    if($('#correo_aviso_docente input[type=checkbox]:checked').length === 0){
      Swal.fire({
        icon: 'error',
        title: 'Sin seleccion',
        text: 'Seleccione al menos un destinatario',
    });
    
    return false;
    }else if($('#asunto_correo').val()==""){
      Swal.fire({
        icon: 'error',
        title: 'Hay un error',
        text: 'No se ha colocado el asunto del correo',
    });
    
    return false;

   }else if($('#mensaje_docente').val()==""){
    Swal.fire({
      icon: 'error',
      title: 'Hay un error',
      text: 'No se ha escrito el mensaje del correo',
  });
  
  return false;

   }



      var datos= $('#correos').serialize() +
               "&asunto=" + $('#asunto_correo').val()+
               "&mensaje=" + $('#mensaje_docente').val();
    
    $.ajax({
      type:"POST",
      url:"control/correo_docente.php",
      data: datos ,
      
      success: function(r){
        if(r=true){
          Swal.fire({
            icon: 'success',
            title: 'Exito',
            text: 'Se han enviado con exito los correos',
        });
        $('#asunto_correo').val('');
        $('#mensaje_docente').val('');
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

  mostrar_docente_aviso();
    
});
document.getElementById("buscar_docente_aviso").addEventListener("keyup", mostrar_docente_aviso);

function mostrar_docente_aviso(){
  $.ajax({
    type: "POST",
    url: 'control/control_correos_docentes.php',
    data:"buscar="+ $('#buscar_docente_aviso').val(),
    success: function(r) {
        $('#tabla_aviso_docente').html(r);
    }
});
}