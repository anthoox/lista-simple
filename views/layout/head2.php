<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Anthony Alegría Alcántara" />
    <meta name="copyright" content="anthoox" />
    <meta name="description" content="Aplicación de listas de tareas">
    <title>Lista Simple</title>
    <link rel="stylesheet" type="text/css" href="/lista-simple/assets/css/bootstrap/style.css">
    <link rel="stylesheet" href="/lista-simple/assets/css/style.css">
</head>


<body>
    <!-- NAV MOVIL -->
    <!-- DESACTIVAR EN VISTAS LOGIN con condicion de session iniciada-->
    <nav class="bg-white  border-end p-4 start-0 h-100 d-flex flex-column align-items-center d-xl-none position-fixed z-3 nav-w nav-position">
        <div class="rounded-circle border border-1 d-flex align-items-center justify-content-center img-user mt-5">
            <img src="/lista-simple/assets/img/logo/logo.png" alt="Foto de perfil" class="img-user rounded-circle ">
        </div>

        <ul class="list-group list-group-flush h-100 pt-2 pb-2 w-100">
            <li class="list-group-item pt-4 pb-4">Inicio</li>
            <li class="list-group-item pt-4 pb-4">Mi cuenta</li>
            <li class="list-group-item pt-4 pb-4">Papelera</li>
            <li class="list-group-item pt-4 pb-4">Soporte</li>
            <li class="list-group-item pt-4 pb-4">Salir</li>

            <li class="list-group-item pt-4 pb-4">
                <img src="/lista-simple/assets/img/iconos/cerrar.svg" alt="Icono cerrar" class="yes-icon d-xl-none">
            </li>
        </ul>
    </nav>


    <!-- CONTENEDOR PRINCIPAL -->
    <div class=" h-100 d-flex flex-column  w-100 ">


        <header class="p-0  w-100  d-flex justify-content-center position-fixed z-2 bg-white  ">
            <div class="container d-flex justify-content-between align-items-center justify-content-xl-center  m-0 pt-2 pb-2 border-bottom border-1">
                <!-- DESACTIVAR EN VISTA DE PRINCIPAL DE ADMIN Y USUARIO -->
                <!-- <div class="d-xl-none">
                    <a name="icon" href=""><img src="/lista-simple/assets/img/iconos/atras.svg" alt="icono atras" class="yes-icon"></a><label for="icon" class="d-none d-sm-inline text-decoration-none text-dark-emphasis fw-medium">Atrás</label>
                </div> -->

                <!-- ACTIVAR EN VISTA DE PRINCIPAL DE ADMIN Y USUARIO -->
                <div class="d-xl-none">
                    <img src="/lista-simple/assets/img/iconos/menu.svg" alt="icono menú" class="yes-icon">
                </div>


                <div class="d-xl-none">
                    <img src="/lista-simple/assets/img/logo/logo.png" alt="Logo Lista Simple" class="logo">
                </div>
                <div class="d-none d-xl-block p-2">
                    <img src="/lista-simple/assets/img/logo/logo_small.png" alt="Logo Lista Simple" class="logo-xl">
                </div>
            </div>

        </header>

        <!-- MAIN -->
        <main class="p-1  w-100 container d-flex top">
            <!-- NAV ESCRITORIO -->
            <nav class="bg-white  border-end p-4  mt-xl-5 d-none d-xl-flex flex-column align-items-center nav-w">
                <div class="rounded-circle border border-1 d-flex align-items-center justify-content-center mt-4  img-user  ">
                    <img src="/lista-simple/assets/img/logo/logo.png" alt="Foto de perfil" class="img-user rounded-circle">
                </div>

                <ul class="list-group list-group-flush h-100 pt-2 pb-2 w-100">
                    <li class="list-group-item pt-4 pb-4">Inicio</li>

                    <li class="list-group-item pt-4 pb-4">Mi cuenta</li>
                    <li class="list-group-item pt-4 pb-4">Papelera</li>
                    <li class="list-group-item pt-4 pb-4">Soporte</li>
                    <li class="list-group-item pt-4 pb-4">Salir</li>

                </ul>
            </nav>
            <!-- CONTENEDOR -->
            <div class=" d-flex flex-column w-100 align-items-center ms-xl-4 mt-xl-5">