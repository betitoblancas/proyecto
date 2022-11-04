<?php
    require_once "conexion.php";
    require_once "metodosCrud.php";

    if(isset($_SESSION['admin'])){
?>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h1>Tabla de Calificaciones</h1>
        </div>
        <div class="container-fluid mt-5" >
<form action="procesos/insertar.php" method="post" >
        <p></p>
        <p></p>
        <input type="text" name="txtmarca">
        <p></p>
        <label for="">Historia</label>
        <p></p>
        <input type="text" name="txtmodelo">
        <p></p>
        <label for="">Geografia</label>
        <p></p>
        <input type="text" name="txtcolor">
        <p></p>
        <label for="">Matematicas</label>
        <p></p>
        <input type="text" name="txtcapacidad">
        <p></p>
        <label for="">Civica</label>
        <p></p>
        <p></p>
        <button class="btn btn-primary">Actualizar</button>
    </form>
    </div>
    </div>
</div>
    <div>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
            <table class="table table-success table-striped border-primary" style="border-collapse: colapse;" border="1">
        <tr>
            <td>id</td>
            <td>Nombre</td>
            <td>Historia</td>
            <td>Geografia</td>
            <td>Matematicas</td>
            <td>Civica</td>

            <td>Promedio</td>
            <td>Actualizar</td>
            <td>Eliminar</td>
        </tr>
        <?php
    $obj= new metodos();
    $sql="SELECT id_alumno,nombre,marca,modelo,color,capacidad from alumno";
    $datos=$obj->mostrarDatos($sql);

    foreach ($datos as $key){
?>
        <tr>
            <td><?php echo $key['id_alumno']; ?></td>
            <td><?php echo $key['nombre']; ?></td>
            <td><?php echo $key['marca'] ?></td>
            <td><?php echo $key['modelo'] ?></td>
            <td><?php echo $key['color'] ?></td>
            <td><?php echo $key['capacidad'] ?></td>
            <td><?php echo ($key['capacidad']+$key['color']+$key['modelo']+$key['marca'])/4 ?></td>
        
            <td><a href="horario copy.php?id_alumno=<?php echo $key['id_alumno'] ?>">Editar</a></td>
            <td><a href="procesos/eliminar.php?id_alumno=<?php echo $key['id_alumno'] ?>">Eliminar</a></td>
        </tr>
    <?php
    }
    ?>
    </table>
            </div>
        </div>
    </div>

    </div>

<?php


} else {
    header('location: editar.php');
  }
?>


<script src="js/horario.js"></script>