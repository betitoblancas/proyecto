<?php  
    
    if(isset($_SESSION['admin'])){
?>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h1>Tabla de alumnos</h1>
        </div>
    </div>
</div>


<div class="container-fluid mt-5">
    <div class="row">
        <div class="col">
            <form id="buscar_estudiante">
                <div class="mb-3">
                    <input type="text" class="form-control" id="buscar" name="buscar" placeholder="Buscar">
                </div>
            </form>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Carrera</th>
                        <th scope="col">Semestre</th>
                        <th scope="col">Grado</th>
                        <th scope="col">Grupo</th>
                        <th scope="col">correo</th>
                        <th scope="col">Matricula</th>
                        <th scope="col">Contraseña</th>
                        <th scope="col">Accion</th>
                    </tr>
                </thead>
                <tbody id="mostrar_datos_alumnos">
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php

require_once 'php/modal_actualizar_alumno.php';


} else {
  header('location: login');
}

?>


<script src="js/actualizarAlumno.js"></script>