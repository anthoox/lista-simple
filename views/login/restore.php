<!-- Cabeceras -->
<?php require_once base_host . 'views/layout/head.php'; ?>

<!-- Contenido -->

<form class="d-flex flex-column justify-content-center col-12 col-md-10 col-lg-6">

    <div class="mb-2">
        <label for="email" class="d-block text-start form-label">Correo</label>
        <input type="email" class="form-control" id="email" placeholder="correo@correo.com" aria-describedby="emailHelp" disabled>
        <div id="emailHelp" class="text-start form-text">Introduce tu correo para enviar un mensaje de recuperación.</div>
    </div>

    <button type="submit" class="btn btn-primary rounded-1 mt-2 mb-2 text-white align-self-center col-12 col-sm-8  col-md-7" disabled>Enviar</button>

</form>

<a class="text-center text-decoration-none text-primary-emphasis fw-medium" href="/">Volver</a>

<p class=" w-75 col-12 col-sm-8 col-md-6 mt-5">Función NO disponible aún. Si necesita ayuda puede enviar su consulta al email: <a href="mailto:listasimple@anthoox.es" class="text-decoration-none">listasimple@anthoox.es</a></p>
<!-- <span class="text-danger fw-semibold f-little">El email no esta registrado</span> -->
<!-- <span class="text-success fw-semibold f-little">Email de recuperación enviado</span> -->


</div>

<!-- Pie de página -->
<?php require_once base_host . 'views/layout/footer.php'; ?>