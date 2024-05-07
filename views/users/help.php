<!-- Cabeceras -->
<?php require_once base_url2 . 'views/layout/head2.php'; ?>

<!-- Contenido -->
<div class="w-100 pe-2 ps-2">
    <h2 class="text-start mb-5 mt-3">Soporte</h2>
</div>


<h3 class="text-start text-primary-emphasis col-12 pe-2 ps-2">Envia tu consulta</h3>
<form class="d-flex flex-column justify-content-center col-12 p-2 ps-2">
    <p class="text-start">Envianos tu consulta desde nuestro formulario o escribenos a: <a href="mailto:listasimple@anthoox.es" class="text-decoration-none">listasimple@anthoox.es</a>.</p>
    <div class="mb-2">
        <label for="exampleFormControlTextarea1" class="d-block text-start form-label">Consulta</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Escribe tu consulta" aria-describedby="textAreaHelp" disabled></textarea>

        <div id="textAreaHelp" class="text-start form-text">Te responderemos por email.</div>

    </div>

    <button type="submit" disabled class=" btn btn-primary rounded-1 mt-2 mb-2 align-self-center text-white col-12 col-sm-8  col-md-7">Enviar</button>

</form>

<!-- <a class="text-center text-decoration-none text-primary-emphasis fw-medium" href="/lista-simple/index.php">Volver</a> -->
<!-- <span class="text-success fw-semibold f-little">Consulta enviada</span> -->



<h3 class="text-start text-primary-emphasis mb-3 col-12 pe-2 ps-2">FaQ</h3>

<div class="accordion col-12 pe-2 ps-2 mb-3" id="accordionPanelsStayOpenExample">
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                <strong>¿Necesito un email real para poder usar la aplicación?</strong>
            </button>
        </h2>
        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse">
            <div class="accordion-body">
                <strong>No es necesario.</strong> Puedes usar un email ficticio o un real si lo deseas. El email será almacenado durante un tiempo y luego será eliminado como todos los datos de los usuarios registrados.
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                <strong>¿Se me enviará publicidad?</strong>

            </button>
        </h2>
        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
            <div class="accordion-body">
                <strong>Para nada.</strong> La aplicación está disponible para probarla. Solo se enviará respuestas a consultas al email desde el que se envían.
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                <strong>¿Cómo puedo añadir listas?</strong>

            </button>
        </h2>
        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
            <div class="accordion-body">
                <strong>Es muy sencillo.</strong> Solo debes dar clic sobre el botón de añadir lista
                <img src="/lista-simple/assets/img/iconos/add-l.svg" alt="Foto de perfil de usuario" class="mb-1 rounded-circle border border-1 bg-success icon-list-ss"> e ir añadiendo los datos que desees. El único dato obligatorio es el nombre.
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                <strong>¿Cómo puedo editar los datos de listas?</strong>

            </button>
        </h2>
        <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse">
            <div class="accordion-body">
                <strong>Desde la vista de tus listas</strong> puedes dar clic en el icono <img src="/lista-simple/assets/img/iconos/editar.svg" alt="Foto de perfil de usuario" class="mb-1 icon-list-ss"> de la lista que quieras editar y así modificar sus datos.
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                <strong>¿Cómo puedo añadir elementos a las listas?</strong>

            </button>
        </h2>
        <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse">
            <div class="accordion-body">
                <strong>Crea una lista y</strong> da clic sobre el nombre de tu lista y te llevará al contenido de la lista. Para añadir nuevos elementos solo debes dar clic en el icono <img src="/lista-simple/assets/img/iconos/add.svg" alt="Foto de perfil de usuario" class="mb-1 rounded-circle border border-1 bg-success icon-list-ss"> y rellenar los datos del elemento a añadir. El único dato obligatorio es el nombre.
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="false" aria-controls="panelsStayOpen-collapseSix">
                <strong>¿Cómo puedo editar los datos de elementos de las listas?</strong>

            </button>
        </h2>
        <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse">
            <div class="accordion-body">
                <strong>Dentro de la vista de los elementos de la lista</strong> puedes dar clic en el icono <img src="/lista-simple/assets/img/iconos/editar.svg" alt="Imagen icono editar" class="mb-1 icon-list-ss"> del elemento que quieras editar y así modificar sus datos.
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSeven" aria-expanded="false" aria-controls="panelsStayOpen-collapseSeven">
                <strong>¿Cómo elimino una lista y sus elementos?</strong>

            </button>
        </h2>
        <div id="panelsStayOpen-collapseSeven" class="accordion-collapse collapse">
            <div class="accordion-body">
                <strong>Si damos clic</strong> en el icono <img src="/lista-simple/assets/img/iconos/papelera.svg" alt="Imagen icono de papelera" class="mb-1 icon-list-ss"> de una lista, esta se enviará a la papelera independientemente del contenido que tenga. Desde la papelera se podrá recuperar o eliminar. Sin embargo, si se eliminan los elementos que de una lista estos se borrarán de forma definitiva.
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseEignt" aria-expanded="false" aria-controls="panelsStayOpen-collapseEignt">
                <strong>¿Cómo elimino los elementos de una lista?</strong>

            </button>
        </h2>
        <div id="panelsStayOpen-collapseEignt" class="accordion-collapse collapse">
            <div class="accordion-body">
                <strong>Damos clic en el nombre de la lista</strong> para acceder a su contenido. Si damos clic en el icono <img src="/lista-simple/assets/img/iconos/papelera.svg" alt="Imagen icono de papelera" class="mb-1 icon-list-ss"> de cualquier elemento de la lista, este se eliminará de forma definitiva.
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseNine" aria-expanded="false" aria-controls="panelsStayOpen-collapseNine">
                <strong>¿Cómo puedo recuperar una lista?</strong>

            </button>
        </h2>
        <div id="panelsStayOpen-collapseNine" class="accordion-collapse collapse">
            <div class="accordion-body">
                <strong>Podemos recuperar las listas</strong> accediendo a la vista papelera y restaurarlas individualmente, dabdo al icono <img src="/lista-simple/assets/img/iconos/restaurar.svg" alt="Imagen icono de restauarar" class="mb-1 icon-list-ss"> o eliminarlas dando al icono <img src="/lista-simple/assets/img/iconos/papelera.svg" alt="Imagen icono de papelera" class="mb-1 icon-list-ss">. También se pueden restaurar o eliminar todas a la vez con los botones <img src="/lista-simple/assets/img/iconos/botonesRD.png" alt="Imagen de iconos de restaurar y vaciar listas de la vista papelera" class="mb-1 iconslist-xl">.
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTen" aria-expanded="false" aria-controls="panelsStayOpen-collapseTen">
                <strong>¿Puedo darme de baja de la aplicación?</strong>

            </button>
        </h2>
        <div id="panelsStayOpen-collapseTen" class="accordion-collapse collapse">
            <div class="accordion-body">
                <strong>Por su puesto</strong>. Desde la vista <strong>Mi cuenta</strong> puedes darte de baja dando clic en el botón <img src="/lista-simple/assets/img/iconos/baja.png" alt="Imagen botón darse de baja de vista Mi cuenta" class="mb-1 iconslist-xl">. Al dar de baja la cuenta se borran todos los datos de esta como el email, usuario, contraseña, listas y elementos de estas.
            </div>
        </div>
    </div>

</div>



</div>


<!-- Pie de página -->
<?php require_once base_url2 . 'views/layout/footer.php'; ?>