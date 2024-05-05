<!-- Cabeceras -->
<?php require_once 'C:/wamp64/www/lista-simple/views/layout/head.php'; ?>

<?php if (isset($_SESSION['identity'])) : ?>
    <?= header("Location:" . base_url . "lists/index") ?>
<?php endif; ?>

<!-- Contenido -->
<form action="<?= base_url ?>users/login" method="POST" class="d-flex flex-column justify-content-center mt-2 col-12 col-md-10 col-lg-6">
    <div class="mb-2">
        <label for="email" class="d-block text-start form-label">Correo</label>
        <input type="email" class="form-control" id="email" placeholder="correo@correo.com" name="email" value="prueba@prueba.com" required>
    </div>
    <div class="mb-2">
        <label for="password" class="d-block text-start form-label">Contraseña</label>
        <input type="password" class="form-control" id="password" name="password" value="123456" required>
    </div>

    <button type="submit" class="btn btn-primary rounded-1 mt-2 mb-2 text-white align-self-center col-12 col-sm-8  col-md-7">Entrar</button>

</form>

<!-- <a class="text-center text-decoration-none text-primary-emphasis fw-medium " href="/lista-simple/views/login/restore.php">¿Olvidaste la
    contraseña?</a> -->
<a class="text-center text-decoration-none text-primary-emphasis fw-medium " href="/lista-simple/">Volver</a>


<?php if (isset($_SESSION['error_login']) && $_SESSION['error_login'] == 'Failed') : ?>
    <span class="text-danger fw-semibold">Usuario o contraseña incorrectos</span>
<?php endif; ?>
<?= Utils::deleteSession('error_login') ?>

</div>

<?php require_once 'C:/wamp64/www/lista-simple/views/layout/footer.php'; ?>