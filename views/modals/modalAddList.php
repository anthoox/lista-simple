<div class="modal fade mt-5" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title fs-5 ">Nueva lista</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="listForm" action="<?= base_url ?>lists/save" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label w-100 text-start">Nombre lista</label>
                        <input type="text" class="form-control" id="name" placeholder="Nombre" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="notification" class="form-label w-100 text-start">Recordatorio</label>
                        <input type="datetime-local" class="form-control" id="notification" name="notification">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label w-100 text-start">Descripción</label>
                        <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                <button type="submit" form="listForm" class="btn btn-success text-white">Guardar</button>
            </div>
        </div>
    </div>
</div>