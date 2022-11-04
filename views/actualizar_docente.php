<?php  
    if(isset($_SESSION['admin'])){
?>

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h1>Tabla de docentes</h1>
        </div>
    </div>
</div>


<div class="container-fluid mt-5">
    <div class="row">
        <div class="col">
            <form id="buscar_docente">
                <div class="mb-3">
                    <input type="text" class="form-control" id="buscar" name="buscar" placeholder="Buscar">
                </div>
            </form>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Clave de trabajador</th>
                        <th scope="col">Contraseña</th>
                        <th scope="col">Accion</th>
                    </tr>
                </thead>
                <tbody id="mostrar_datos_docente">
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
require_once 'php/modal_actualizar_docente.php';


} else {
  header('location: login');
}
?>


<script src="js/actualizaDocente.js"></script>