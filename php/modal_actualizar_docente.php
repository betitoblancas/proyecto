<!-- Modal -->
<div class="modal fade" id="modalActualizarDocente" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            
                    <form id="formulario_actualiza_docente">

                        <div >
                            <input type="text" class="form-control" id="actualiza_id_docente"
                                name="actualiza_id_docente" hidden="true">
                        </div>

                        <div class="mb-3">
                            <label for="usuario" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="actualiza_nombre" name="actualiza_nombre">
                        </div>

                        <div class="mb-3">
                            <label for="usuario" class="form-label">Apellido Paterno</label>
                            <input type="text" class="form-control" id="actualiza_paterno" name="actualiza_paterno">
                        </div>

                        <div class="mb-3">
                            <label for="usuario" class="form-label">Apellido Materno</label>
                            <input type="text" class="form-control" id="actualiza_materno" name="actualiza_materno">
                        </div>

                        <div class="mb-3">
                            <label for="usuario" class="form-label">Correo</label>
                            <input type="email" class="form-control" id="actualiza_correo" name="actualiza_correo">
                        </div>

                        <div class="mb-3">
                            <label for="usuario" class="form-label">Clave de travajador</label>
                            <input type="text" class="form-control" id="actualiza_clave" name="actualiza_clave">
                        </div>

                        <div class="mb-3">
                            <label for="usuario" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="actualiza_contra" name="actualiza_contra">
                        </div>


                    </form>
                
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="actualiza_docente" data-bs-dismiss="modal">Actualizar
                    Docente</button>
            </div>
        </div>
    </div>
</div>




<script src="js/actualizaDocente.js"></script>