<!-- Modal -->
<div class="modal fade" id="modalActualizarAlumno" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar Información</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        

              <form id="formulario_actualiza_alumno">

              <div class="mb-3">
                <input type="text" class="form-control" id="actualiza_id" name="actualiza_id" hidden="true">
              </div>
              <div class="mb-3">
                <label for="usuario" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="actualiza_nombre" name="actualiza_nombre">
              </div>
              <div class="mb-3">
                <label for="usuario" class="form-label">Apellido Paterno</label>
                <input type="text" class="form-control" id="actualiza_paterno" name="actualiza_paterno">
              </div>
              <div class="mb-3">
                <label for="usuario" class="form-label">Apellido Materno</label>
                <input type="text" class="form-control" id="actualiza_materno" name="actualiza_materno">
              </div>
              <div class="mb-3">
                <label for="usuario" class="form-label">Carrera</label>
                
                <select class="form-select" aria-label="Default select example" id="carrera" name="carrera">
                            <option Disabled>Seleccione Carrera</option>
                            <option value="1">Informatica</option>
                        </select>
              </div>
              <div class="mb-3">
                <label for="usuario" class="form-label">Semestre</label>
                <select class="form-select" aria-label="Default select example" id="semestre" name="semestre">
                            <option Disabled>Selecciona una opcion</option>
                            <option value="1">Semestre 1</option>
                            <option value="2">Semestre 2</option>
                            <option value="3">Semestre 3</option>
                            <option value="4">Semestre 4</option>
                            <option value="5">Semestre 5</option>
                            <option value="6">Semestre 6</option>

                        </select>
              </div>
              <div class="mb-3">
                <label for="usuario" class="form-label">Grupo</label>
                <input type="text" class="form-control" id="actualiza_grupo" name="actualiza_grupo">
              </div>
              
              <div class="mb-3">
                <label for="contraseña" class="form-label">Correo</label>
                <input type="text" class="form-control" id="actualiza_correo" name="actualiza_correo">
              </div>
              <div class="mb-3">
                <label for="contraseña" class="form-label">Matricula</label>
                <input type="text" class="form-control" id="actualiza_matricula" name="actualiza_matricula">
              </div>
              <div class="mb-3">
                <label for="usuario" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="actualiza_contra" name="actualiza_contra">
              </div>
            
            </form>
           
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="actualiza_datos_alumno" data-bs-dismiss="modal">Actualizar Estudiante</button>
      </div>
    </div>
  </div>
</div>

<script src="js/actualizarAlumno.js"></script>