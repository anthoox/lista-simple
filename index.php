<?php
session_start();

require_once 'autoload.php';
require_once 'config/db.php';
require_once 'config/parameters.php';
require_once 'helpers/utils.php';



// Función para cerrar la sesión si ha pasado un tiempo desde la última actividad
// function checkSessionTimeout()

// {
//     // Establecer el tiempo de espera en segundos (por ejemplo, 5 minutos)
//     $timeout = 3; // 300 segundos = 5 minutos

//     // Verificar si se ha registrado la hora de la última actividad en la sesión
//     if (isset($_SESSION['last_activity'])) {
//         // Calcular el tiempo transcurrido desde la última actividad
//         $elapsed_time = time() - $_SESSION['last_activity'];

//         // Si ha pasado más tiempo del permitido, cerrar la sesión
//         if ($elapsed_time > $timeout) {
//             // Cerrar la sesión
//             session_unset();
//             session_destroy();
//             $_SESSION['killsesion'] = 'La sesión ha expirado';
//             // Redirigir a la página de inicio de sesión u otra página
//             header('Location: ' . base_url . 'users/logout');
//             exit();
//         }
//     }

//     // Actualizar la hora de la última actividad en la sesión
//     $_SESSION['last_activity'] = time();
// }

// // Llamar a la función para verificar el tiempo de espera de la sesión en cada solicitud de página
// checkSessionTimeout();

function show_error()
{
    $error = new ErrorController();
    $error->index();
}

if (isset($_GET['controller'])) {
    $nombre_controlador = $_GET['controller'] . 'Controller';
} elseif (!isset($_GET['controller']) && !isset($_GET['action'])) {
    $nombre_controlador = controller_default;
} else {
    show_error();
}

if (isset(($nombre_controlador))) {
    if (class_exists($nombre_controlador)) {
        $controlador = new $nombre_controlador();
        if (isset($_GET['action']) && method_exists($controlador, $_GET['action'])) {
            $action = $_GET['action'];
            $controlador->$action();
        } elseif (!isset($_GET['controller']) && !isset($_GET['action'])) {
            $default = action_default;
            $controlador->$default();
        } else {
            show_error();
        }
    } else {
        show_error();
    }
}
