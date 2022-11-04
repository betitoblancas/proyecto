<?php  
    
    if(isset($_SESSION['admin'])){
?>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h1>Tabla de materias</h1>
        </div>
    </div>
</div>
<div class="container-fluid mt-5">
  <div class="row">
    <div class="col">
      <table class="table ">
        <thead>
          <tr>
            <th scope="col">Materia</th>
            <th scope="col">Docente</th>
            <th scope="col">Semestre</th>
            <th scope="col">Grupo</th>
          </tr>
        </thead>
        <tbody id="tabla_materia" >
        </tbody>
      </table>
     
    </div>
  </div>
</div>
<?php

} else {
  header('location: login');
}
?>
<script src="js/materia.js"></script>