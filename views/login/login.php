<!-- Cabeceras -->
<?php require_once 'C:/wamp64/www/lista-simple/views/layout/head.php'; ?>

<!-- Contenido -->
<div class="w-100">
    <img src="/lista-simple/assets/img/logo/logo_small.png" alt="Logo Lista Simple" title="Lista Simple" class="logo-intro">
</div>
<div class="continer d-flex flex-column">
    <form>
        <div class="mb-2">
            <label for="email" class="d-block text-start form-label">Correo</label>
            <input type="email" class="form-control" id="email" placeholder="correo@correo.com">
        </div>
        <div class="mb-2">
            <label for="password" class="d-block text-start form-label">Contraseña</label>
            <input type="password" class="form-control" id="password">
        </div>

        <button type="submit" class="btn btn-primary rounded-1 mt-2 mb-2 w-50">Entrar</button>

    </form>

    <a class="text-center text-decoration-none text-primary-emphasis fw-medium" href="/lista-simple/views/login/restore.php">¿Olvidaste la
        contraseña?</a>

    <span class="text-danger fw-semibold f-little">Usuario o contraseña incorrectos</span>

</div>

<!-- Pie de página -->
<?php require_once 'C:/wamp64/www/lista-simple/views/layout/footer.php'; ?>