<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Anthony Alegría Alcántara" />
    <meta name="copyright" content="anthoox" />
    <meta name="description" content="Aplicación de listas de tareas">
    <title>Lista Simple</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url ?>assets/css/bootstrap/style.css">
    <link rel="stylesheet" href="<?= base_url ?>assets/css/style.css">
</head>


<body>



    <!-- CONTENEDOR PRINCIPAL -->
    <div class=" h-100 d-flex flex-column  w-100 ">


        <header class="p-0  w-100  d-flex justify-content-center position-fixed z-2 bg-white  ">
            <div class="container d-flex justify-content-between align-items-center justify-content-xl-center  m-0 pt-2 pb-2 border-bottom border-1">

                <!-- ACTIVAR EN VISTA DE PRINCIPAL DE ADMIN Y USUARIO -->
                <div class="d-xl-none">
                    <img src="<?= base_url ?>assets/img/iconos/menu.svg" alt="icono menú" class="yes-icon" id="btn-menu-abrir">
                </div>


                <div class="d-xl-none">
                    <img src="<?= base_url ?>assets/img/logo/logo.png" alt="Logo Lista Simple" class="logo">
                </div>
                <div class="d-none d-xl-block p-2">
                    <img src="<?= base_url ?>assets/img/logo/logo_small.png" alt="Logo Lista Simple" class="logo-xl">
                </div>
            </div>

        </header>
        <!-- NAV MOVIL -->
        <nav class="bg-white  border border-1 h-100 p-4  mt-xl-5 d-flex d-xl-none flex-column align-items-center position-absolute z-3 nav-w nav-hidden" id="nav-movil">
            <div class="rounded-circle border border-1 d-flex align-items-center justify-content-center mt-4  img-user  ">
                <?php if (isset($_SESSION['identity']->image)) : ?>
                    <img src="<?= base_url ?>uploads/images/<?= $_SESSION['identity']->id ?>/<?= $_SESSION['identity']->image ?>" alt="Foto de perfil" class="rounded-circle img-user">

                <?php else : ?>
                    <img src="<?= base_url ?>assets/img/logo/logo.png" alt="Foto de perfil" class="rounded-circle img-user">

                <?php endif; ?>

            </div>

            <ul class="list-group list-group-flush h-100 pt-2 pb-2 w-100">
                <?php if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) : ?>
                    <li class="list-group-item pt-4 pb-4"><a href="<?= base_url ?>lists/index" class="text-decoration-none text-black">Inicio</a></li>
                    <li class="list-group-item pt-4 pb-4"><a href="<?= base_url ?>users/logout" class="text-decoration-none text-black">Salir</a></li>
                <?php elseif (isset($_SESSION['user']) && $_SESSION['user'] == true) : ?>
                    <li class="list-group-item pt-4 pb-4"><a href="<?= base_url ?>lists/index" class="text-decoration-none text-black">Inicio</a></li>
                    <li class="list-group-item pt-4 pb-4"><a href="<?= base_url ?>users/acount" class="text-decoration-none text-black">Mi cuenta</a></li>
                    <li class="list-group-item pt-4 pb-4"><a href="<?= base_url ?>users/trash" class="text-decoration-none text-black">Papelera</a></li>
                    <li class="list-group-item pt-4 pb-4"><a href="<?= base_url ?>users/help" class="text-decoration-none text-black">Soporte</a></li>
                    <li class="list-group-item pt-4 pb-4"><a href="<?= base_url ?>users/logout" class="text-decoration-none text-black">Salir</a></li>
                <?php endif; ?>
                <li class="list-group-item pt-4 pb-4"><img src="<?= base_url ?>assets/img/iconos/cerrar.svg" alt="Icono cerrar menú lateral" class="yes-icon" id="btn-menu-cerrar"></li>

            </ul>
        </nav>

        <!-- MAIN -->
        <main class="p-1  w-100 container d-flex top" id="main">
            <!-- NAV ESCRITORIO -->
            <nav class="bg-white  border-end p-4  mt-xl-3 d-none d-xl-flex flex-column align-items-center nav-w ">
                <div class="rounded-circle border border-1 d-flex align-items-center justify-content-center mt-4  img-user  ">
                    <?php if (isset($_SESSION['identity']->image)) : ?>
                        <img src="<?= base_url ?>uploads/images/<?= $_SESSION['identity']->id ?>/<?= $_SESSION['identity']->image ?>" alt="Foto de perfil" class="rounded-circle img-user">

                    <?php else : ?>
                        <img src="<?= base_url ?>assets/img/logo/logo.png" alt="Foto de perfil" class="rounded-circle img-user">

                    <?php endif; ?>

                </div>

                <ul class="list-group list-group-flush h-100 pt-2 pb-2 w-100">
                    <?php if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) : ?>
                        <li class="list-group-item pt-4 pb-4"><a href="<?= base_url ?>lists/index" class="text-decoration-none text-black">Inicio</a></li>
                        <li class="list-group-item pt-4 pb-4"><a href="<?= base_url ?>users/logout" class="text-decoration-none text-black">Salir</a></li>
                    <?php elseif (isset($_SESSION['user']) && $_SESSION['user'] == true) : ?>
                        <li class="list-group-item pt-4 pb-4"><a href="<?= base_url ?>lists/index" class="text-decoration-none text-black">Inicio</a></li>
                        <li class="list-group-item pt-4 pb-4"><a href="<?= base_url ?>users/acount" class="text-decoration-none text-black">Mi cuenta</a></li>
                        <li class="list-group-item pt-4 pb-4"><a href="<?= base_url ?>users/trash" class="text-decoration-none text-black">Papelera</a></li>
                        <li class="list-group-item pt-4 pb-4"><a href="<?= base_url ?>users/help" class="text-decoration-none text-black">Soporte</a></li>
                        <li class="list-group-item pt-4 pb-4"><a href="<?= base_url ?>users/logout" class="text-decoration-none text-black">Salir</a></li>
                    <?php endif; ?>
                </ul>
            </nav>


            <!-- CONTENEDOR -->
            <div class=" d-flex flex-column w-100 align-items-center ms-xl-4 mt-xl-5">