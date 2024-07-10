<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Anthony Alegría Alcántara" />
    <meta name="copyright" content="anthoox" />
    <meta name="description" content="Aplicación de listas de tareas">
    <title>Lista Simple</title>
    <link rel="icon" href="<?= web ?>img/logo/logo.ico">
    <link rel="stylesheet" type="text/css" href="<?= web ?>css/bootstrap/style.css">
    <link rel="stylesheet" href="<?= web ?>css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
</head>


<body class="vh-100">
    <div class="h-100 d-flex flex-column justify-content-between pt-md-5">

        <main class="p-4 p-4 w-100 container mt-5 d-flex flex-column mb-md5">
            <div class="w-100 mb-2 mt-5">
                <img src="<?= web ?>img/logo/logo_small.png" alt="Logo Lista Simple" title="Lista Simple" class="col-12 col-md-10 col-lg-7 col-xl-6 col-xxl-5 mt-5">
            </div>
            <div class=" d-flex flex-column w-100 align-items-center">
                <?php
                if (isset($_SESSION['logout'])) {
                    echo '
                    <div>
                    <h5>La sesión ha expirado</h5>
                    </div>';
                }
                ?>