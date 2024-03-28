<!-- Cabeceras -->
<?php require_once 'C:/wamp64/www/lista-simple/views/layout/head.php'; ?>

<!-- Contenido -->
<form action="/lista-simple/index/?controller=users&action=save" method="POST" class="d-flex flex-column justify-content-center col-12 col-md-10 col-lg-6">
    <div class="mb-2">
        <label for="username" class="d-block text-start form-label">Usuario</label>
        <input type="text" class="form-control" id="username" placeholder="Usuario" name="username">
    </div>
    <div class="mb-2">
        <label for="email" class="d-block text-start form-label">Correo</label>
        <input type="email" class="form-control" id="email" placeholder="correo@correo.com" name="email">
    </div>
    <div class="mb-2">
        <label for="password" class="d-block text-start form-label">Contraseña</label>
        <input type="password" class="form-control " id="password" name="password">
    </div>
    <button type="submit" class="btn btn-success rounded-1 mt-2 mb-2 text-white align-self-center col-12 col-sm-8  col-md-7 ">Registrar</button>

</form>


<a class="text-center text-decoration-none text-primary-emphasis fw-medium" href="/lista-simple/index.php">Volver</a>


<!-- <span class="text-danger fw-semibold f-little">El email ya existe en el sistema</span> -->
<span class="text-success fw-semibold f-little">Usuario regitrado correctamente</span>

</div>

<!-- Pie de página -->
<?php require_once 'C:/wamp64/www/lista-simple/views/layout/footer.php'; ?>