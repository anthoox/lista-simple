<!-- Cabeceras -->
<?php require_once 'C:/wamp64/www/lista-simple/views/layout/head.php'; ?>

<!-- Contenido -->
<div class="w-100 ">
    <img src="/lista-simple/assets/img/logo/logo_small.png" alt="Logo Lista Simple" title="Lista Simple" class="logo-intro">
</div>
<div class="continer d-flex flex-column ">
    <h2 class="text-start text-primary-emphasis">Contacto</h2>
    <form>
        <p class="text-start">Envianos tu consulta desde nuestro formulario o escribenos a: <a href="" class="text-decoration-none">contacto@listasimple.com</a>.</p>
        <div class="mb-2">
            <label for="email" class="d-block text-start form-label">Correo</label>
            <input type="email" class="form-control" id="email" placeholder="correo@correo.com">
        </div>
        <div class="mb-2">
            <label for="exampleFormControlTextarea1" class="d-block text-start form-label">Mensaje</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Escribe tu consulta" aria-describedby="textAreaHelp"></textarea>
            <div id="textAreaHelp" class="text-start form-text">Te responderemos por email.</div>

        </div>
        <button type="submit" class="btn btn-primary rounded-1 mt-2 mb-2 w-50 text-white">Enviar</button>

    </form>

    <a class="text-center text-decoration-none text-primary-emphasis fw-medium" href="/lista-simple/index.php">Volver</a>
    <span class="text-success fw-semibold f-little">Consulta enviada</span>



</div>

<!-- Pie de página -->
<?php require_once 'C:/wamp64/www/lista-simple/views/layout/footer.php'; ?>