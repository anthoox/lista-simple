<!-- 
    ESTO DEBE SER EL INDEX PRINCIPAL
-->

<!-- Cabeceras -->
<?php require_once 'C:/wamp64/www/lista-simple/views/layout/head2.php'; ?>

<!-- Contenido -->
<div class="d-flex flex-column col-12 mt-xl-3 flex-sm-row gap-1 justify-content-between p-0 m-0">
    <div class="d-flex justify-content-around gap-1 col-12 col-sm-6">
        <a class="btn bg-primary rounded-3 text-white  border-1 border-light col-5 col-sm-5 col-md-4  fw-semibold f-little">Listas</a>
        <a class="btn bg-secondary-emphasis rounded-3 border-1 border-dark-subtle col-5 col-sm-5 col-md-4 fw-semibold f-little">Próximas</a>

    </div>
    <div class="d-flex justify-content-around gap-1 col-12 col-sm-6">

        <a class="btn bg-body rounded-3 border-1 border-dark-subtle col-5 col-sm-5 col-md-4 fw-semibold f-little">Pendientes</a>
        <a class="btn bg-body rounded-3 border-1 border-dark-subtle col-5 col-sm-5 col-md-4 fw-semibold f-little">Completas</a>
    </div>
</div>
<div class="d-flex flex-column col-12 mt-1 mt-xl-3 gap-2 p-2 ">
    <!-- ELEMENTO -->
    <div class="w-100 rounded-4 border border-1 border-dark-subtle p-1 pe-3 ps-3">
        <div class="d-flex w-100 justify-content-end gap-2">
            <!-- superior -->
            <div>
                <img src="/lista-simple/assets/img/iconos/editar.svg" alt="" class="iconslist">
            </div>
            <div>
                <img src="/lista-simple/assets/img/iconos/papelera.svg" alt="" class="iconslist">
            </div>
        </div>

        <div class="d-flex w-100 justify-content-start fw-semibold">
            <!-- medio -->
            NOMBRE
        </div>

        <div class="d-flex w-100 justify-content-between">
            <!-- Inferior -->
            <div class="text-primary fw-semibold f-little">

                31/12/24
            </div>
            <div class="fw-semibold">

                1/10
            </div>
        </div>
    </div>

    <div class="w-100 rounded-4 border border-1 border-dark-subtle p-1 pe-3 ps-3">
        <div class="d-flex w-100 justify-content-end gap-2">
            <!-- superior -->
            <div>
                <img src="/lista-simple/assets/img/iconos/editar.svg" alt="" class="iconslist">
            </div>
            <div>
                <img src="/lista-simple/assets/img/iconos/papelera.svg" alt="" class="iconslist">
            </div>
        </div>

        <div class="d-flex w-100 justify-content-start fw-semibold">
            <!-- medio -->
            NOMBRE
        </div>

        <div class="d-flex w-100 justify-content-between">
            <!-- Inferior -->
            <div class="text-primary fw-semibold f-little fw-semibold">



            </div>
            <div class="fw-semibold">
                1/10
            </div>
        </div>
    </div>

    <div class="w-100 rounded-4 border border-1 border-dark-subtle p-1 pe-3 ps-3 bg-body-secondary">
        <div class="d-flex w-100 justify-content-end gap-2">
            <!-- superior -->
            <div>
                <img src="/lista-simple/assets/img/iconos/editar.svg" alt="" class="iconslist">
            </div>
            <div>
                <img src="/lista-simple/assets/img/iconos/papelera.svg" alt="" class="iconslist">
            </div>
        </div>

        <div class="d-flex w-100 justify-content-start text-secondary fw-semibold text-decoration-line-through">
            <!-- medio -->
            NOMBRE
        </div>

        <div class="d-flex w-100 justify-content-between">
            <!-- Inferior -->
            <div class="text-secondary fw-semibold text-decoration-line-through f-little">
                31/12/24

            </div>
            <div class="text-secondary fw-semibold text-decoration-line-through">
                10/10
            </div>
        </div>
    </div>


</div>


<div class="rounded-circle border border-1 bg-success d-flex align-items-center justify-content-center position-fixed bottom-0 end-0 mb-xl-5 me-3 me-xl-5 shadow add" data-bs-toggle="modal" data-bs-target="#exampleModal">
    <img src="/lista-simple/assets/img/iconos/add-l.svg" alt="Foto de perfil" class=" icon-list">
</div>


<!-- Modal -->
<div class="modal fade mt-5" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title fs-5 " id="exampleModalLabel">Nueva lista</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="lists/save">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label w-100 text-start">Nombre lista</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nombre">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label w-100 text-start">Recordatorio</label>
                        <input type="datetime-local" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label w-100 text-start">Notas</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success text-white">Guardar</button>
            </div>
        </div>
    </div>
</div>


</div>

<!-- Pie de página -->
<?php
require_once 'C:/wamp64/www/lista-simple/views/layout/footer.php';
?>