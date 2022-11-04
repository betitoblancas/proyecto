<?php  
    session_start();
    if(isset($_SESSION['admin'])){
?>

<div class="container-fluid mb-3 mt-3">
  <div class="row">
    <div class="col">
    <nav class="navbar navbar-expand-lg navbar-light  ">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarNavDropdown">
        <ul class="navbar-nav justify-content-around">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button"
              aria-expanded="false">Registrar</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="registrar-alumno">Alumno</a></li>
              <li><a class="dropdown-item" href="registrar-docente">Docente</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button"
              aria-expanded="false">Actualizar/Eliminar</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="actualizar-alumno">Alumno</a></li>
              <li><a class="dropdown-item" href="actualiza-docente">Docente</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button"
              aria-expanded="false">Institución</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="horario">Calificaciones</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="horario">Agregar Calificaciones</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false">Avisos</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="aviso-alumno">Alumno</a></li>
              <li><a class="dropdown-item" href="aviso-docente">Docente</a></li>

              
            </ul>
          </li>
          <li class="nav-item" ><a class="btn" id="salir">Salir</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    </div>
  </div>
</div>

<?php

} else {
  header('location: login');
}
?>

<script src="js/session.js"></script>