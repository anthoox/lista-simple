<!-- Cabeceras -->
<?php require_once 'C:/wamp64/www/lista-simple/views/layout/head.php'; ?>

<!-- Contenido -->

<form class="d-flex flex-column justify-content-center movil-sm">

    <div class="mb-2">
        <label for="email" class="d-block text-start form-label">Correo</label>
        <input type="email" class="form-control" id="email" placeholder="correo@correo.com" aria-describedby="emailHelp">
        <div id="emailHelp" class="text-start form-text">Introduce tu correo para enviar un mensaje de recuperación.</div>
    </div>

    <button type="submit" class="btn btn-primary rounded-1 mt-2 mb-2 text-white">Enviar</button>

</form>

<a class="text-center text-decoration-none text-primary-emphasis fw-medium" href="/lista-simple/views/login/login.php">Volver</a>


<!-- <span class="text-danger fw-semibold f-little">El email no esta registrado</span> -->
<span class="text-success fw-semibold f-little">Email de recuperación enviado</span>


</div>

<!-- Pie de página -->
<?php require_once 'C:/wamp64/www/lista-simple/views/layout/footer.php'; ?>