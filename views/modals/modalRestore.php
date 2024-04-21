<div class="modal fade mt-5" id="restoreModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title fs-5 ">Restaurar listas</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formRestore" action="<?= base_url ?>lists/restoreAll" method="POST">
                    <div class="mb-3">
                        <p for="name" class="form-label w-100 text-center fw-normal fs-5">Al restaurar las listas estas se moverán al inicio ¿Esta seguro?</p>
                    </div>

                    <input type="text" class="form-control" id="idListRestore" name="idList" hidden>


                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" form="formRestore" class="btn btn-success text-white">Restaurar</button>
            </div>
        </div>
    </div>
</div>