<?php
ob_start();
session_set_cookie_params(60*60*24*90);
session_start();

require_once 'autoload.php';
require_once 'config/db.php';
require_once 'config/parameters.php';
require_once 'helpers/utils.php';


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

if (isset($nombre_controlador)) {

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
} else {
    show_error();
}
