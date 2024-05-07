<!-- Cabeceras -->
<?php require_once 'C:/wamp64/www/lista-simple/views/layout/head2.php'; ?>

<!-- Contenido -->
<div class="w-100 mt-xl-5 pe-2 ps-2">
    <h2 class="text-start mb-5 mt-3">Info<br>
        de usuario</h2>
</div>

<div class=" col-12 col-md-10 col-lg-8">
    <ul class="list-group list-group-flush">
        <li class="list-group-item d-flex justify-content-between">
            <span class="fw-semibold">ID:</span><span>12</span>
        </li>
        <li class="list-group-item d-flex justify-content-between">
            <span class="fw-semibold">Usuario:</span><span>Prueba</span>
        </li>
        <li class="list-group-item d-flex justify-content-between">
            <span class="fw-semibold">Correo:</span><span>prueba@prueba.com</span>
        </li>
        <li class="list-group-item d-flex justify-content-between">
            <span class="fw-semibold">Alta:</span><span>12/01/2024</span>
        </li>

    </ul>
</div>

<div class="mt-4 mb-4 w-100 pe-2 ps-2">
    <hr>
</div>

<div class="w-100 mt-xl-5 pe-2 ps-2">
    <h2 class="text-start mb-5 mt-3">Gestion<br>
        de usuario</h2>
</div>

<form class="mt-2 d-flex flex-column justify-content-center  col-12 col-md-10 col-lg-8 pe-2 ps-2">
    <div class="mb-2">
        <label for="username" class="d-block text-start form-label">Usuario</label>
        <input type="text" class="form-control" id="username" placeholder="Usuario.com">
    </div>
    <div class="mb-2">
        <label for="email" class="d-block text-start form-label">Correo</label>
        <input type="email" class="form-control" id="email" placeholder="correo@correo.com">
    </div>

    <div class="w-100 mt-4 col-12 col-xl-7 d-flex flex-column justify-content-center align-items-center flex-sm-row gap-sm-5 ">


        <button type="submit" class="btn btn-success rounded-1  mt-2 mb-2 text-white   col-12 col-sm-3 ">Reset cuenta</button>
        <button type="submit" class="btn btn-primary rounded-1 mt-2 mb-2 text-white col-12 col-sm-3">Reset claves</button>


    </div>
    <div class="w-100  col-12 col-xl-7 d-flex flex-column justify-content-center align-items-center flex-sm-row gap-sm-5">


        <button type="submit" class="btn btn-primary rounded-1 mt-2 mb-2 text-white col-12 col-sm-3">Reset basura</button>
        <button type="submit" class="btn btn-danger rounded-1  mt-2 mb-2 text-white  col-12 col-sm-3 ">Dar de baja</button>

    </div>

    <button type="submit" class="btn align-self-center btn-success rounded-1 mt-5 mb-2 text-white align-self-center col-12 col-sm-8  col-md-7">Guardar</button>

</form>

<div class="d-flex flex-column col-12 col-xl-7 pe-2 ps-2 mb-5">
    <span class="text-success fw-semibold f-little">Cuentas reseteadas</span>
    <span class="text-primary fw-semibold f-little">Claves reseteadas</span>
    <span class="text-danger fw-semibold f-little">Base de datos vaciada</span>

</div>



</div>


<!-- Pie de página -->
<?php require_once 'C:/wamp64/www/lista-simple/views/layout/footer.php'; ?>