<!-- Cabeceras -->
<?php

require_once 'C:/wamp64/www/lista-simple/config/parameters.php';
require_once 'C:/wamp64/www/lista-simple/helpers/utils.php';
require_once 'C:/wamp64/www/lista-simple/views/layout/head.php';
?>

<!-- Contenido -->

<h2 class="text-start text-primary-emphasis mb-3 col-12 col-md-10 col-lg-6">FaQ</h2>

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
                <img src="<?= base_url ?>assets/img/iconos/add.svg" alt="Foto de perfil de usuario" class="mb-1 rounded-circle border border-1 bg-success icon-list-ss"> e ir añadiendo los datos que desees. El único dato obligatorio es el nombre.
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
                <strong>Desde la vista de tus listas</strong> puedes dar clic en el icono <img src="<?= base_url ?>assets/img/iconos/editar.svg" alt="Foto de perfil de usuario" class="mb-1 icon-list-ss"> de la lista que quieras editar y así modificar sus datos.
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
                <strong>Crea una lista y</strong> da clic sobre el nombre de tu lista y te llevará al contenido de la lista. Para añadir nuevos elementos solo debes dar clic en el icono <img src="<?= base_url ?>assets/img/iconos/add.svg" alt="Foto de perfil de usuario" class="mb-1 rounded-circle border border-1 bg-success icon-list-ss"> y rellenar los datos del elemento a añadir. El único dato obligatorio es el nombre.
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
                <strong>Dentro de la vista de los elementos de la lista</strong> puedes dar clic en el icono <img src="<?= base_url ?>assets/img/iconos/editar.svg" alt="Imagen icono editar" class="mb-1 icon-list-ss"> del elemento que quieras editar y así modificar sus datos.
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSeven" aria-expanded="false" aria-controls="panelsStayOpen-collapseSeven">
                <strong>¿Cómo elimino una lista?</strong>

            </button>
        </h2>
        <div id="panelsStayOpen-collapseSeven" class="accordion-collapse collapse">
            <div class="accordion-body">
                <strong>Manten seleccionada un momento una lista</strong> y se mostrará el icono <img src="<?= base_url ?>assets/img/iconos/papelera.svg" alt="Imagen icono de papelera" class="mb-1 icon-list-ss">. Al dar clic en este icono la lista se enviará a la papelera independientemente del contenido que tenga. Desde la papelera se podrá recuperar o eliminar definitivamente.
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
                <strong>Tras acceder al contenido de la lista</strong>, mantenemos presionado el elemento que queremos eliminar hasta que aparezca el icono <img src="<?= base_url ?>assets/img/iconos/papelera.svg" alt="Imagen icono de papelera" class="mb-1 icon-list-ss">. Para eliminar el elemento de la lista simplemente tenemos que dar clic sobre el icono de la papelera. Los elementos de la lista no pasan por la papelera. Se eliminan de forma definitiva.
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
                <strong>Podemos recuperar las listas</strong> accediendo a la vista papelera y restaurarlas individualmente, dabdo al icono <img src="<?= base_url ?>assets/img/iconos/restaurar.svg" alt="Imagen icono de restauarar" class="mb-1 icon-list-ss"> o eliminarlas dando al icono <img src="<?= base_url ?>assets/img/iconos/papelera.svg" alt="Imagen icono de papelera" class="mb-1 icon-list-ss">. También se pueden restaurar o eliminar todas a la vez con los botones <img src="<?= base_url ?>assets/img/iconos/botonesRD.png" alt="Imagen de iconos de restaurar y vaciar listas de la vista papelera" class="mb-1 iconslist-xl">.
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
                <strong>Por su puesto</strong>. Desde la vista <strong>Mi cuenta</strong> puedes darte de baja dando clic en el botón <img src="<?= base_url ?>assets/img/iconos/baja.png" alt="Imagen botón darse de baja de vista Mi cuenta" class="mb-1 iconslist-xl">. Al dar de baja la cuenta se borran todos los datos de esta como el email, usuario, contraseña, listas y elementos de estas.
            </div>
        </div>
    </div>

</div>
<a class="text-center text-decoration-none text-primary-emphasis fw-medium mt-3 " href="<?= base_url ?>">Volver</a>

</div>

<!-- Pie de página -->
<?php require_once base_host . 'views/layout/footer.php'; ?>