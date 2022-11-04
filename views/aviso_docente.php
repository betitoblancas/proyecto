<?php  
    if(isset($_SESSION['admin'])){
?>

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h1>Avisos para Docentes</h1>
        </div>
    </div>
</div>
<div class="container-fluid mt-5">
  <div class="row">
    <div class="col">
      <div class="mb-3">
        <input type="text" class="form-control" id="buscar_docente_aviso" name="buscar" placeholder="Buscar">
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox"  id="seleccionar-todos">
        <label class="form-check-label">
          Seleccionar a todos
        </label>
      </div>

      <div id="correo_aviso_docente">
        <form id="correos">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Nombre</th>
              <th scope="col">Correo</th>
            </tr>
          </thead>
          <tbody id="tabla_aviso_docente">
          </tbody>
        </table>
        </form>
      </div>

    </div>
    <div class="col">
      <div class="mb-3">
        <label for="usuario" class="form-label">Asunto</label>
        <input type="text" class="form-control" id="asunto_correo" name="asunto_correo">
      </div>

      <div class="mb-3 form-floating">
        <textarea class="form-control" placeholder="Escribe el mensaje para enviar a los docentes" id="mensaje_docente"
          name="mensaje_docente" style="height: 100px"></textarea>
        <label for="floatingTextarea2">Mensaje</label>
      </div>
      <div>
      <button class="btn btn-primary" id="enviar_correo_docente">Enviar</button>
    </div>
    </div>
    
  </div>
</div>
<?php

} else {
  header('location: login');
}
?>


<script src="js/avisoDocente.js"></script>