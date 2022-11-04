<?php  
    
    if(isset($_SESSION['admin'])){
?>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h1>Registrar alumno</h1>
        </div>
    </div>
</div>

<div class="container-fluid mt-5">
    <form id="registrarAlumno">
        <div class="row row-cols-1 row-cols-lg-2 ">
            <div class="col">
                <div class="p-3 bordes bg-light">
                    <div class="mb-3">
                        <label for="usuario" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese Nombre">
                    </div>
                    <div class="mb-3">
                        <label for="usuario" class="form-label">Apellido
                            Pateno</label>
                        <input type="text" class="form-control" id="apellidoP" name="apellidoP"
                            placeholder="Ingrese Apellido Paterno">
                    </div>
                    <div class="mb-3">
                        <label for="usuario" class="form-label">Apellido
                            Materno</label>
                        <input type="text" class="form-control" id="apellidoM" name="apellidoM"
                            placeholder="Ingrese Apellido Materno">
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
                </div>
            </div>
            <div class="col">
                <div class="p-3 bordes bg-light">
                    
                    <div class="mb-3">
                        <label for="usuario" class="form-label">Grupo</label>
                        <input type="text" class="form-control" id="grupo" name="grupo"
                            placeholder="Ingrese Grupo">
                    </div>
                   
                    <div class="mb-3">
                        <label for="contraseña" class="form-label">Correo Electronico</label>
                        <input type="email" class="form-control" id="correo" name="correo"
                            placeholder="Ingrese Correo Electronico">
                    </div>

                    <div class="mb-3">
                        <label for="usuario" class="form-label">Matricula</label>
                        <input type="text" class="form-control" id="matricula" name="matricula"
                            placeholder="Ingrese Matricula">
                    </div>
                    
                    <div class="mb-3">
                        <label for="contraseña" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Ingrese Contraseña">
                    </div>

                    <div class="mb-4 d-grid gap-2">
                        <a id="btnregistrar" class="btn btn-primary mt-4">Regsitrar</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<?php

} else {
  header('location: login');
}
?>
<script src="js/registroAlumno.js"></script>