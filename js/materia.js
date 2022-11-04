$(document).ready(function () {

  $.ajax({
    type: "POST",
    url: "control/buscar_materias.php",
    success: function (r) {
      
      $('#tabla_materia').html(r);
    }

  });


});
