<!-- Cabeceras -->
<?php
require_once 'C:/wamp64/www/lista-simple/views/layout/head2.php';
$userData = $_SESSION['identity'];
?>

<!-- Contenido -->
<div class="w-100 pe-2 ps-2">
    <h2 class="text-start mb-5 mt-3">Mi<br>
        cuenta</h2>
</div>




<form class="mt-2  d-flex flex-column justify-content-center  col-12 col-md-10 col-lg-8 pe-2 ps-2" action="<?= base_url ?>users/edit" method="POST" enctype="multipart/form-data">
    <div class="mb-2">
        <label for="username" class="d-block text-start form-label">Usuario</label>
        <input type="text" class="form-control" id="username" placeholder="Usuario.com" name="username" value="<?= $userData->username ?>">
    </div>
    <div class="mb-2">
        <label for="email" class="d-block text-start form-label">Correo</label>
        <input type="email" class="form-control" id="username" placeholder="correo@correo.com" name="email" value="<?= $userData->email ?>">
    </div>
    <div class="mb-2">
        <label for="password" class="d-block text-start form-label">Contraseña</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>
    <div class="mb-2">
        <label for="file" class="d-block text-start form-label">Imagen de usuario</label>
        <input type="file" class="form-control" id="file" name="file">
    </div>


    <button type="submit" class="btn btn-success rounded-1 mt-5 mb-2 text-white align-self-center col-12 col-sm-8  col-md-7" name="guardar">Guardar</button>
    <!-- <button type="submit" class="btn btn-primary rounded-1 mt-2 mb-2 text-white align-self-center col-12 col-sm-8  col-md-7" name="descarga">Descargar</button> -->

    <button type="submit" class="btn btn-danger rounded-1 mt-2 mb-2 text-white align-self-center col-12 col-sm-8  col-md-7" name="baja">Darse de baja</button>


</form>

<div class="d-flex flex-column col-12 col-xl-7 pe-2 ps-2 mb-5">
    <?php if (isset($_SESSION['save']) && $_SESSION['save'] == 'completed') : ?>
        <span class="text-success fw-semibold f-little">Datos actualizados</span>
    <?php elseif ((isset($_SESSION['save']) && $_SESSION['save'] == 'failed')) : ?>
        <span class="text-success fw-semibold f-little text-danger">Error al actualizar los datos</span>
    <?php elseif ((isset($_SESSION['save']) && $_SESSION['save'] == 'prueba')) : ?>
        <span class="text-success fw-semibold f-little text-danger">Los datos de este usuario no se pueden modificar</span>
    <?php endif; ?>
    <?= Utils::deleteSession('save') ?>
</div>



</div>


<!-- Pie de página -->
<?php
require_once 'C:/wamp64/www/lista-simple/views/layout/footer.php';
?>