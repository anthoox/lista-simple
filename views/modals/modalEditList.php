<div class="modal fade mt-5" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title fs-5 ">Editar</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="listFormEdit" action="<?= base_url ?>lists/edit" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label w-100 text-start">Nombre lista</label>
                        <input id="listName" type="text" class="form-control fw-semibold" id="name" placeholder="Nombre" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="notification" class="form-label w-100 text-start">Recordatorio</label>
                        <input type="datetime-local" class="form-control" id="edit-notification" name="notification">
                    </div>
                    <input type="text" class="form-control" id="idList" name="idList" hidden>

                    <div class="mb-3">
                        <label for="description" class="form-label w-100 text-start">Descripción</label>
                        <textarea class="form-control" id="edit-description" rows="3" name="description"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" form="listFormEdit" class="btn btn-success text-white">Guardar</button>
            </div>
        </div>
    </div>
</div>