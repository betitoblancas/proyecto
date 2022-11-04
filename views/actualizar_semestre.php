<?php  
    
    if(isset($_SESSION['admin'])){
?>

<div class="container-fluid ">
    <div class="row">
        <div class="col">
            <h1>Tabla de semestres</h1>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalActualizarAlumno" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar Información</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

<div class="container-fluid mt-5 mb-5">
    <div class="row">
        <div class="col d-flex justify-content-center ">
            <div class="card justify-content-center bordes" style="width: 50%;">
                <div class="card-body">
                    <form id="datos_semestre">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Dato</th>
                                    <th scope="col">Actual</th>
                                    <th scope="col">Actualizar A</th>
                                </tr>
                            </thead>

                            <tbody id="mostrar_tabla">


                            </tbody>
                            

                        </table>
                        <span class="btn btn-primary" id="btn_actualizar_semestre">Actualizar</span>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<?php

} else {
  header('location: login');
}
?>


<script src="js/actualizaSemestre.js"></script>