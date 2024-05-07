<div class="modal fade mt-5" id="emptyModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title fs-5 ">Vaciar papelera</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formDelete" action="<?= base_url ?>lists/deleteAll" method="POST">
                    <div class="mb-3">
                        <p for="name" class="form-label w-100 text-center fw-normal fs-6">Va a eliminar definitivamente todas las litas ¿Esta seguro?</p>
                    </div>

                    <input type="text" class="form-control" id="idListRestore" name="idList" hidden>


                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" form="formDelete" class="btn btn-success text-white">Vaciar</button>
            </div>
        </div>
    </div>
</div>