<!-- Cabeceras -->
<!-- Sin session no existe enviar a home.php -->
<?php
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
    // require_once 'C:/wamp64/www/lista-simple/views/layout/head.php';
    show_error();
}


if (class_exists($nombre_controlador)) {
    $controlador = new $nombre_controlador();
    if (isset($_GET['action']) && method_exists($controlador, $_GET['action'])) {
        $action = $_GET['action'];
        $controlador->$action();
    } elseif (!isset($_GET['controller']) && !isset($_GET['action'])) {
        $default = action_default;
        $controlador->$default();
    } else {

        // require_once 'C:/wamp64/www/lista-simple/views/layout/head.php';

        // echo
        // '<h1>404</h1>
        // <p>La pagina que buscas no existe wey</p>
        // <a href="http://localhost/lista-simple/home">Volver2</a>';
        // require_once 'C:/wamp64/www/lista-simple/views/layout/footer.php';

        show_error();
    }
} else {

    // require_once 'C:/wamp64/www/lista-simple/views/layout/head.php';

    // echo
    // '<h1>404</h1>
    //     <p>La pagina que buscas no existe tronco</p>
    //     <a href="http://localhost/lista-simple/home">Volver3</a>';
    // require_once 'C:/wamp64/www/lista-simple/views/layout/footer.php';

    show_error();
}
?>
<!-- Est div probablemente hay que quitarlo -->
</div>

<!-- Retocar al final, al menos del final de login -->