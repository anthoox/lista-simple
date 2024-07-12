<!-- Cabeceras -->
<?php require_once base_host . 'views/layout/head.php'; ?>
<?php require_once base_host . 'controllers/UsersController.php'; ?>


<?php




if (!isset($_SESSION['identity'])) {
    if (isset($_COOKIE['user_email']) && isset($_COOKIE['user_password'])) {
       
        // Identificar usuario
        $user = new User();
        $user->setEmail($_COOKIE['user_email']);
        $user->setPassword($_COOKIE['user_password']);

        // Consulta a la base de datos
        $identity = $user->login();

        // Iniciar la sesión
        if ($identity && is_object($identity)) {
            $_SESSION['identity'] = $identity;
            if ($identity->rol == 1) {
                $_SESSION['admin'] = true;
            } elseif ($identity->rol == 2) {
                $_SESSION['user'] = true;
            }
        }
    }
}

if (isset($_SESSION['identity'])) {
    // header("Location: https://listasimple.anthoox.es/lists/index"); 
    header("Location: http://localhost/lista-simple/lists/index");
} 

?>



<!-- Contenido -->
<form action="<?= base_url ?>users/login" method="POST" class="d-flex flex-column justify-content-center mt-2 col-12 col-md-10 col-lg-6">
    <div class="mb-2">
        <label for="email" class="d-block text-start form-label">Correo</label>
        <input type="email" class="form-control" id="email" placeholder="correo@correo.com" name="email" value="prueba@prueba.com" required>
    </div>
    <div class="mb-2">
        <label for="password" class="d-block text-start form-label">Contraseña</label>
        <input type="password" class="form-control" id="password" name="password" value="aDGas+?+{32" required>
    </div>

    <button type="submit" class="btn btn-primary rounded-1 mt-2 mb-2 text-white align-self-center col-12 col-sm-8  col-md-7">Entrar</button>

</form>

<!-- <a class="text-center text-decoration-none text-primary-emphasis fw-medium " href="/lista-simple/views/login/restore.php">¿Olvidaste la
    contraseña?</a> -->
<a class="text-center text-decoration-none text-primary-emphasis fw-medium " href="<?= base_url ?>">Volver</a>


<?php if (isset($_SESSION['error_login']) && $_SESSION['error_login'] == 'Failed') : ?>
    <span class="text-danger fw-semibold">Usuario o contraseña incorrectos</span>
<?php endif; ?>
<?= Utils::deleteSession('error_login') ?>

</div>

<?php require_once base_host . 'views/layout/footer.php'; ?>