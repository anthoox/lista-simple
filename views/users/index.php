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
<div class="d-flex flex-column col-12 mt-2 mt-md-4 gap-2 p-2 ">
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


<div class="rounded-circle border border-1 bg-success d-flex align-items-center justify-content-center position-fixed bottom-0 end-0 mb-5 me-5 shadow add">
    <img src="/lista-simple/assets/img/iconos/add-l.svg" alt="Foto de perfil" class=" icon-list">
</div>



</div>

<!-- Pie de página -->
<?php
require_once 'C:/wamp64/www/lista-simple/views/layout/footer.php';
?>