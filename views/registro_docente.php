<?php  
    
    if(isset($_SESSION['admin'])){
?>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h1>Registrar Docente</h1>
        </div>
    </div>
</div>


<div class="container-fluid mt-5">
    <form id="registrarDocente">
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

                </div>
            </div>
            <div class="col">
                <div class="p-3 bordes bg-light">
                    <div class="mb-3">
                        <label for="contraseña" class="form-label">Correo Electronico</label>
                        <input type="email" class="form-control" id="correo" name="correo"
                            placeholder="Ingrese Correo Electronico">
                    </div>

                    <div class="mb-3">
                        <label for="contraseña" class="form-label">Clave trabajador</label>
                        <input type="password" class="form-control" id="clave" name="clave"
                            placeholder="Ingrese Clave de trabajador">
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
<script src="js/registroDocente.js"></script>