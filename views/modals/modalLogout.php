<div class="modal fade mt-5" id="logoutModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title fs-5 ">Salir</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formDelete" action="<?= base_url ?>users/logout" method="POST">
                    <div class="mb-3">
                        <p for="name" class="form-label w-100 text-center fw-normal fs-6">¿Desea salir de la aplicación?</p>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" form="formDelete" class="btn btn-success text-white">Salir</button>
            </div>
        </div>
    </div>
</div>