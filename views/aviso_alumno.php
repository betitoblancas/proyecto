<?php  
    
    if(isset($_SESSION['admin'])){
?>

<div class="container-fluid">
  <div class="row">
    <div class="col">
      <h1>Avisos para Alumnos</h1>
    </div>
  </div>
</div>
<div class="container-fluid mt-5 mb-5">
  <div class="row">
    <div class="col">
      <div class="mb-3">
        <input type="text" class="form-control" id="buscar_alumno_aviso" name="buscar" placeholder="Buscar">
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="seleccionar-todos">
        <label class="form-check-label">
          Seleccionar a todos
        </label>
      </div>

      <div id="correo_aviso_alumno">
        <form id="correos">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Correo</th>
              </tr>
            </thead>
            <tbody id="tabla_aviso_alumno">
            </tbody>
          </table>
        </form>
      </div>

    </div>
    <div class="col">
     

      <div class="mb-3 form-floating">
        <input type="text" class="form-control" placeholder=" " id="asunto_correo" name="asunto_correo">
        <label for="floating">Asunto</label>
        
      </div>

      <div class="mb-3 form-floating">
        <textarea class="form-control" placeholder=" " id="mensaje_alumno" name="mensaje_alumno"
          style="height: 100px"></textarea>
        <label for="floatingTextarea">Mensaje</label>
      </div>

      <div>
        <button class="btn btn-primary" id="enviar_correo_alumno">Enviar</button>
      </div>
    </div>

  </div>
</div>
<?php

} else {
  header('location: login');
}
?>

<script src="js/avisoAlumno.js"></script>