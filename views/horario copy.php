<?php
    require_once "../conexion.php";
    require_once "../metodosCrud.php";
    $obj=new conectar();
    $conexion=$obj->conexion();
    $id=$_GET['id_alumno'];
    $sql="SELECT marca,modelo,color,capacidad
            from alumno where id_alumno='$id'";
    $result=mysqli_query($conexion,$sql);
    $ver=mysqli_fetch_row($result);

    if(isset($_SESSION['admin'])){
?>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h1>Tabla de Calificaciones</h1>
        </div>
    </div>
</div>


<div class="modal fade" id="modalAgregarMateria" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-body">
            <form class="row g-3 " action="../procesos/actualizar.php" method="post" >
    <input type="text" hidden="" value="<?php echo $id?>" name="id">
        <p></p>
        <label for="">Marca</label>
        <p></p>
        <input type="text" name="txtmarca" value="<?php echo $ver[1]?>">
        <p></p>
        <label for="">Modelo</label>
        <p></p>
        <input type="text" name="txtmodelo" value="<?php echo $ver[2]?>">
        <p></p>
        <label for="">Color</label>
        <p></p>
        <input type="text" name="txtcolor" value="<?php echo $ver[3]?>">
        <p></p>
        <label for="">Capacidad</label>
        <p></p>
        <input type="text" name="txtcapacidad" value="<?php echo $ver[4]?>">
        <p></p>
        <div class="modal-footer">
                <button type="button" class="btn btn-primary" >Actualizar</button>
            </div>
    </form>

            </div>
        </div>
    </div>
<?php

require_once 'php/modal_horario.php';

} else {
    header('location: login');
  }
?>
