<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Anthony Alegría Alcántara" />
    <meta name="copyright" content="anthoox" />
    <meta name="description" content="Aplicación de listas de tareas">
    <title>Lista Simple</title>
    <link rel="icon" href="<?= base_url ?>assets/img/logo/logo.ico">
    <link rel="stylesheet" type="text/css" href="<?= base_url ?>assets/css/bootstrap/style.css">
    <link rel="stylesheet" href="<?= base_url ?>assets/css/style.css">
</head>


<body>


    <!-- CONTENEDOR PRINCIPAL -->
    <div class=" h-100 d-flex flex-column  w-100 " id="main-container">


        <header class="p-0  w-100  d-flex justify-content-center position-fixed z-2 bg-white  ">
            <div class="container d-flex justify-content-between align-items-center justify-content-xl-center  m-0 pt-2 pb-2 ps-0 pe-1 border-bottom border-1">

                <div class="d-xl-none ">
                    <?php
                    if($_SESSION['icon'] == 1){
                        echo '<a href="'.base_url . 'lists/index" class="d-flex align-items-center fw-semibold fs-4 text-star text-decoration-none text-black">
        <img src="' . web . 'img/iconos/return.svg" alt="Icono de información de lista" class="iconslist-lg "> <span class="fs-6 ">Volver</span>
    </a>';
                        
                    }else{
                        echo '<img src="'.base_url .'assets/img/iconos/menu.svg" alt="icono menú" class="yes-icon" id="btn-menu-abrir">';
                    }
                    ?>
                    
                </div>
                
                 <?= $_SESSION['identity']->username  ?></span><span>Usuario:</span>-->
             

                <div class="d-xl-none">
                    <img src="<?= base_url ?>assets/img/logo/logo.png" alt="Logo Lista Simple" class="logo">
                </div>
                <div class="d-none d-xl-block p-2">
                    <img src="<?= base_url ?>assets/img/logo/logo_small.png" alt="Logo Lista Simple" class="logo-xl">
                </div>
                <div class="w-100 d-none  d-xl-flex  flex-row-reverse align-items-center">
                    <span class="p-1 ps-3 pe-3 bg-primary text-white ms-2 me-2 rounded rounded-3"> <?= $_SESSION['identity']->username  ?></span><span>Usuario:</span>
                </div>

                <div class="d-none d-xl-block">
                    <img src="<?= base_url ?>assets/img/logo/logo.png" alt="Logo Lista Simple" class="logo">
                </div>

            </div>

        </header>

        <!-- NAV MOVIL -->
        <nav class="bg-white  border border-1  p-4  mt-xl-5 d-flex top-0 xl-none flex-column align-items-center position-absolute z-3 nav-w nav-hidden" id="nav-movil">
            <div class="rounded-circle border border-1 d-flex align-items-center justify-content-center mt-4  img-user  ">
                <?php if (isset($_SESSION['identity']->image)) : ?>
                    <img src="<?= base_url ?>uploads/images/<?= $_SESSION['identity']->id ?>/<?= $_SESSION['identity']->image ?>" alt="Foto de perfil" class="rounded-circle img-user">

                <?php else : ?>
                    <img src="<?= base_url ?>assets/img/logo/logo.png" alt="Foto de perfil" class="rounded-circle img-user">

                <?php endif; ?>

            </div>

            <ul class="list-group list-group-flush h-100 pt-2 pb-2 w-100 ">
                <?php if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) : ?>
                    <li class="list-group-item pt-4 pb-4 "><a href="<?= base_url ?>lists/index" class="text-decoration-none text-black fw-semibold">Inicio</a></li>
                    <li class="list-group-item pt-4 pb-4 "><a href="<?= base_url ?>users/logout" class="text-decoration-none text-black fw-semibold">Salir</a></li>
                <?php elseif (isset($_SESSION['user']) && $_SESSION['user'] == true) : ?>
                    <li class="list-group-item pt-4 pb-4 "><a href="<?= base_url ?>lists/index" class="text-decoration-none text-black fw-semibold">Inicio</a></li>
                    <li class="list-group-item pt-4 pb-4 "><a href="<?= base_url ?>users/acount" class="text-decoration-none text-black fw-semibold">Mi cuenta</a></li>
                    <li class="list-group-item pt-4 pb-4 "><a href="<?= base_url ?>users/trash" class="text-decoration-none text-black fw-semibold">Papelera</a></li>
                    <li class="list-group-item pt-4 pb-4 "><a href="<?= base_url ?>users/help" class="text-decoration-none text-black fw-semibold">Soporte</a></li>
                    <li class="list-group-item pt-4 pb-4 "><a href="#" class="text-decoration-none text-black fw-semibold" data-bs-toggle="modal" data-bs-target="#logoutModal">Salir</a></li>
                <?php endif; ?>
                <li class="list-group-item pt-4 pb-4"><img src="<?= base_url ?>assets/img/iconos/cerrar.svg" alt="Icono cerrar menú lateral" class="yes-icon" id="btn-menu-cerrar"></li>

            </ul>
        </nav>

        <!-- MAIN -->
        <main class="p-1  w-100 container d-flex top overflow-show">
            <!-- NAV ESCRITORIO -->
            <nav class="bg-white  border-end p-4  mt-xl-3 d-none d-xl-flex flex-column align-items-center nav-w ">
                <div class="rounded-circle border border-1 d-flex align-items-center justify-content-center mt-4  img-user  ">
                    <?php if (isset($_SESSION['identity']->image)) : ?>
                        <img src="<?= base_url ?>uploads/images/<?= $_SESSION['identity']->id ?>/<?= $_SESSION['identity']->image ?>" alt="Foto de perfil" class="rounded-circle img-user">

                    <?php else : ?>
                        <img src="<?= base_url ?>assets/img/logo/logo.png" alt="Foto de perfil" class="rounded-circle img-user"><br>
                    <?php endif; ?>

                </div>

                <ul class="list-group list-group-flush h-100 pt-2 pb-2 w-100">
                    <?php if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) : ?>
                        <li class="list-group-item pt-4 pb-4  "><a href="<?= base_url ?>lists/index" class="text-decoration-none text-black fw-semibold">Inicio</a></li>
                        <li class="list-group-item pt-4 pb-4  "><a href="<?= base_url ?>users/logout" class="text-decoration-none text-black fw-semibold">Salir</a></li>
                    <?php elseif (isset($_SESSION['user']) && $_SESSION['user'] == true) : ?>
                        <li class="list-group-item pt-4 pb-4  "><a href="<?= base_url ?>lists/index" class="text-decoration-none text-black fw-semibold">Inicio</a></li>
                        <li class="list-group-item pt-4 pb-4  "><a href="<?= base_url ?>users/acount" class="text-decoration-none text-black fw-semibold">Mi cuenta</a></li>
                        <li class="list-group-item pt-4 pb-4  "><a href="<?= base_url ?>users/trash" class="text-decoration-none text-black fw-semibold">Papelera</a></li>
                        <li class="list-group-item pt-4 pb-4  "><a href="<?= base_url ?>users/help" class="text-decoration-none text-black fw-semibold">Soporte</a></li>
                        <li class="list-group-item pt-4 pb-4  "><a href="" class="text-decoration-none text-black fw-semibold" data-bs-toggle="modal" data-bs-target="#logoutModal">Salir</a></li>
                    <?php endif; ?>
                </ul>
            </nav>


            <!-- CONTENEDOR -->
            <div class=" d-flex flex-column w-100 align-items-center ms-xl-4 mt-xl-3">