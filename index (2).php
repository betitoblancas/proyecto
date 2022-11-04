<?php
require_once 'app/dependencias.php';

require_once "conexion.php";
require_once "metodosCrud.php";
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SII</title>
</head>

<body>

  <?php

  if (isset($_GET['seleccion_de_pagina'])) {

    $direccion_solicitada = explode('/', $_GET['seleccion_de_pagina']);

    switch ($direccion_solicitada[0]) {

      case 'inicio': {
          require_once 'php/cabecera.php';
          require_once 'views/login.php';
          break;
        }
      case 'menu': {
          require_once 'php/cabecera.php';
          require_once 'php/menu.php';
          break;
        }
      case 'registrar-alumno': {
          require_once 'php/cabecera.php';
          require_once 'php/menu.php';
          require_once 'views/registro_alumno.php';
          break;
        }
      case 'registrar-docente': {
          require_once 'php/cabecera.php';
          require_once 'php/menu.php';
          require_once 'views/registro_docente.php';
          break;
        }
      case 'actualizar-alumno': {
          require_once 'php/cabecera.php';
          require_once 'php/menu.php';
          require_once 'views/actualizar_alumno.php';
          break;
        }
      case 'actualiza-docente': {
          require_once 'php/cabecera.php';
          require_once 'php/menu.php';
          require_once 'views/actualizar_docente.php';
          break;
        }
      case 'actualiza-semestre': {
          require_once 'php/cabecera.php';
          require_once 'php/menu.php';
          require_once 'views/actualizar_semestre.php';
          break;
        }
      case 'horario': {
          require_once 'php/cabecera.php';
          require_once 'php/menu.php';
          require_once 'views/horario.php';
          break;
        }
      case 'materia': {
          require_once 'php/cabecera.php';
          require_once 'php/menu.php';
          require_once 'views/registro_materia.php';
          break;
        }case 'aviso-alumno':{
          require_once 'php/cabecera.php';
          require_once 'php/menu.php';
          require_once 'views/aviso_alumno.php';
          break;
        }case 'aviso-docente':{
          require_once 'php/cabecera.php';
          require_once 'php/menu.php';
          require_once 'views/aviso_docente.php';
          break;
        }
      default: {
          require_once 'php/cabecera.php';
          require_once 'views/login.php';

          break;
        }
    }
  } else {
    require_once 'control/control_salida.php';
  }

  ?>
<form action="procesos/insertar.php" method="post" >
        <label for="">Nombre</label>
        <p></p>
        <input type="text" name="txtnombre">
        <p></p>
        <label for="">Marca</label>
        <p></p>
        <input type="text" name="txtmarca">
        <p></p>
        <label for="">Modelo</label>
        <p></p>
        <input type="text" name="txtmodelo">
        <p></p>
        <label for="">Color</label>
        <p></p>
        <input type="text" name="txtcolor">
        <p></p>
        <label for="">Capacidad</label>
        <p></p>
        <input type="text" name="txtcapacidad">
        <p></p>
        <button>Agregar</button>
    </form>
    <br></br>
    <table style="border-collapse: colapse;">
        <tr>
            <td>nombre</td>
            <td>marca</td>
            <td>modelo</td>
            <td>color</td>
            <td>capacidad (kg)</td>
            <td>Actualizar</td>
            <td>Eliminar</td>
        </tr>
<?php
    $obj= new metodos();
    $sql="SELECT id,nombre,marca,modelo,color,capacidad from t_persona";
    $datos=$obj->mostrarDatos($sql);

    foreach ($datos as $key){
?>
        <tr>
            <td><?php echo $key['nombre']; ?></td>
            <td><?php echo $key['marca'] ?></td>
            <td><?php echo $key['modelo'] ?></td>
            <td><?php echo $key['color'] ?></td>
            <td><?php echo $key['capacidad'] ?></td>
            <td><a href="editar.php?id=<?php echo $key['id'] ?>">Editar</a></td>
            <td><a href="procesos/eliminar.php?id=<?php echo $key['id'] ?>">Eliminar</a></td>
        </tr>
    <?php
    }
    ?>
    </table>
</body>

</html>
