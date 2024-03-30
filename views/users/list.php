<!-- Cabeceras -->
<?php require_once 'C:/wamp64/www/lista-simple/views/layout/head2.php'; ?>

<!-- Contenido -->
<div class="d-flex col-12 mt-xl-3 justify-content-between  align-items-center p-1  pe-3 ps-3 m-0 border-1 border-bottom border-top">

    <span class="fw-semibold fs-4">
        Total: --
    </span>



    <a href="">
        <img src="/lista-simple/assets/img/iconos/info.svg" alt="Icono de información de lista" class="iconslist-lg">
    </a>

</div>

<div class="d-flex flex-column col-12 mt-2 mt-md-4 gap-2 p-2 ">
    <!-- ELEMENTO -->
    <div class="w-100 rounded-4 border border-1 border-dark-subtle p-1 pe-3 ps-3 d-flex">
        <div class="form-check h-100 d-flex align-items-center pe-1 border-1 border-end">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
        </div>
        <div class="w-100 ps-2">
            <div class="d-flex w-100 justify-content-end gap-2">
                <!-- superior -->
                <div>
                    <span class="fw-semibold">3€</span>
                </div>
                <div>
                    <span class="fw-semibold">x2</span>
                </div>
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
                    31/12/24 20:20
                </div>
            </div>
        </div>

    </div>


    <div class="w-100 rounded-4 border border-1 border-dark-subtle p-1 pe-3 ps-3 d-flex bg-body-secondary">
        <div class="form-check h-100 d-flex align-items-center pe-1 border-1 border-end">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
        </div>
        <div class="w-100 ps-2">
            <div class="d-flex w-100 justify-content-end gap-2">
                <!-- superior -->
                <div>
                    <span class="fw-semibold">3€</span>
                </div>
                <div>
                    <span class="fw-semibold">x2</span>
                </div>
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
                    31/12/24 20:20
                </div>
            </div>
        </div>

    </div>

</div>


<div class="rounded-circle border border-1 bg-success d-flex align-items-center justify-content-center position-fixed bottom-0 end-0 mb-4 me-4 add">
    <img src="/lista-simple/assets/img/iconos/add.svg" alt="Foto de perfil" class=" icon-list">
</div>



</div>


<!-- Pie de página -->
<?php
require_once 'C:/wamp64/www/lista-simple/views/layout/footer.php';
?>