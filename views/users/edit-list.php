<!-- Cabeceras -->
<?php require_once base_url2 . 'views/layout/head2.php'; ?>

<!-- Contenido -->
<div class="w-100 mt-xl-5 pe-2 ps-2">
    <h2 class="text-start  mb-5 mt-3">Editar lista</h2>
</div>

<form class="d-flex flex-column justify-content-center  col-12 col-md-10 col-lg-8 pe-2 ps-2">
    <div class="mb-2">
        <label for="username" class="d-block text-start form-label">Nombre</label>
        <input type="text" class="form-control" id="username" placeholder="Nombre">
    </div>

    <div class="mb-2">
        <label for="fecha" class="d-block text-start form-label">Recordatorio</label>
        <input type="datetime-local" class="form-control" id="fecha" placeholder="0€">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label d-block text-start">Notas</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>

    <button type="submit" class="btn align-self-center btn-success rounded-1 mt-5 mb-2 text-white align-self-center col-12 col-sm-8  col-md-7">Guardar</button>

    <div class="d-flex flex-column align-items-center w-100 col-12 col-xl-7 pe-2 ps-2">
        <span class="text-success fw-semibold f-little">Cuentas reseteadas</span>
        <span class="text-danger fw-semibold f-little">Base de datos vaciada</span>

    </div>

    <div class="d-flex flex-column mt-5 mb-5">
        <a href=""><img src="/lista-simple/assets/img/iconos/papelera.svg" class="iconslist-lg" alt="Icono eliminar"></a>
        <span>Eliminar</span>
    </div>
</form>




</div>


<!-- Pie de página -->
<?php
require_once base_url2 . 'views/layout/footer.php';
?>