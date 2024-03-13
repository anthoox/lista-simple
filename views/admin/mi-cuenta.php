<!-- Cabeceras -->
<?php require_once 'C:/wamp64/www/lista-simple/views/layout/head2.php'; ?>

<!-- Contenido -->
<div class="w-100 mt-xl-5">
    <h2 class="text-start  ms-xl-5 mb-5 mt-3">Mi<br>
        cuenta</h2>
</div>

<div class="mt-2 col-12 col-md-10 col-lg-8 d-flex flex-column align-items-center">
    <div class="rounded-circle border border-2 img-user-xl ">

        <img src="/lista-simple/assets/img/logo/logo.png" alt="Foto de perfil" class="img-user-xl rounded-circle">

    </div>
    <h3>Administrador</h3>
</div>

<form class="mt-2  d-flex flex-column justify-content-center  col-12 col-md-10 col-lg-8">
    <div class="mb-2">
        <label for="username" class="d-block text-start form-label">Usuario</label>
        <input type="text" class="form-control" id="username" placeholder="Usuario.com">
    </div>
    <div class="mb-2">
        <label for="password" class="d-block text-start form-label">Contraseña</label>
        <input type="password" class="form-control" id="password">
    </div>


    <button type="submit" class="btn align-self-center btn-success rounded-1 mt-5 mb-2 text-white align-self-center col-12 col-sm-8  col-md-7">Guardar</button>

</form>

<div class="d-flex flex-column col-12 col-xl-7">
    <span class="text-success fw-semibold f-little">Cuentas reseteadas</span>
    <span class="text-primary fw-semibold f-little">Claves reseteadas</span>
    <span class="text-danger fw-semibold f-little">Base de datos vaciada</span>

</div>



</div>


<!-- Pie de página -->
<?php require_once 'C:/wamp64/www/lista-simple/views/layout/footer2.php'; ?>