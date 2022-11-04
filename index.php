<?php
require_once 'app/dependencias.php';
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

</body>

</html>