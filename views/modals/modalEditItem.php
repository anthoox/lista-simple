<div class="modal fade mt-5" id="editItemModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title fs-5 ">Editar</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="itemEditForm" action="<?= base_url ?>items/edit" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label w-100 text-start">Nombre </label>
                        <input type="text" class="form-control" id="item-name" placeholder="Nombre" name="name" autofocus>
                    </div>
                    <div class="d-flex flex-colum gap-2">
                        <div class="mb-3  w-50">
                            <label for="exampleInputPassword1" class="form-label w-100 text-start">Precio</label>
                            <input type="number" step="0.01" class="form-control" id="item-price" name="price" value="0.00">
                        </div>
                        <div class="mb-3  w-50">
                            <label for="exampleInputPassword1" class="form-label w-100 text-start">Unidades</label>
                            <input type="number" class="form-control" id="item-units" name="units" value="1">
                        </div>

                        <input type="text" class="form-control" name="idItem" hidden id="item-id">

                        <input type="text" class="form-control" name="idList" hidden id="list-id">




                    </div>
                    <!-- <div class="mb-3">
                        <label for="notification" class="form-label w-100 text-start">Notificación</label>
                        <input type="datetime-local" class="form-control" id="item-notification" name="notification">
                        <div id="notificationHelp" class="form-text text-start">Notificación no disponible.</div>

                    </div> -->
                    <div class="mb-3">
                        <label for="notes" class="form-label w-100 text-start">Notas</label>
                        <textarea class="form-control" id="item-notes" rows="3" name="notes"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" form="itemEditForm" class="btn btn-success text-white">Guardar</button>
            </div>
        </div>
    </div>
</div>