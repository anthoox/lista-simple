<!-- Cabeceras -->
<?php require_once 'C:/wamp64/www/lista-simple/views/layout/head.php'; ?>

<!-- Contenido -->

<form class="d-flex flex-column justify-content-center movil-sm">
    <div class="mb-2">
        <label for="email" class="d-block text-start form-label">Correo</label>
        <input type="email" class="form-control" id="email" placeholder="correo@correo.com">
    </div>
    <div class="mb-2">
        <label for="password" class="d-block text-start form-label">Contraseña</label>
        <input type="password" class="form-control" id="password">
    </div>

    <button type="submit" class="btn btn-primary rounded-1 mt-2 mb-2">Entrar</button>

</form>

<a class="text-center text-decoration-none text-primary-emphasis fw-medium " href="/lista-simple/views/login/restore.php">¿Olvidaste la
    contraseña?</a>

<span class="text-danger fw-semibold f-little">Usuario o contraseña incorrectos</span>

</div>

<!-- Pie de página -->
<?php require_once 'C:/wamp64/www/lista-simple/views/layout/footer.php'; ?>