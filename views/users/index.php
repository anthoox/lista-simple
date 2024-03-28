<!-- 
    ESTO SERA el index de la web
-->


<!-- Cabeceras -->
<?php require_once 'C:/wamp64/www/lista-simple/autoload.php'; ?>

<?php
if (isset($_GET['controller'])) {
    $nombre_controlador = $_GET['controller'] . 'Controller';
} else {
    require_once 'C:/wamp64/www/lista-simple/views/layout/head.php';

    echo
    '<h1>404</h1>
        <p>La pagina que buscas no existe</p>
        <a href="../../index.php">Volver1</a>';
    require_once 'C:/wamp64/www/lista-simple/views/layout/footer.php';
    // exit() detiene la ejecución.
    exit();
}


if (class_exists($nombre_controlador)) {
    $controlador = new $nombre_controlador();
    if (isset($_GET['action']) && method_exists($controlador, $_GET['action'])) {
        $action = $_GET['action'];
        $controlador->$action();
    } else {

        require_once 'C:/wamp64/www/lista-simple/views/layout/head.php';

        echo
        '<h1>404</h1>
        <p>La pagina que buscas no existe wey</p>
        <a href="../../index.php">Volver2</a>';
        require_once 'C:/wamp64/www/lista-simple/views/layout/footer.php';
    }
} else {

    require_once 'C:/wamp64/www/lista-simple/views/layout/head.php';

    echo
    '<h1>404</h1>
        <p>La pagina que buscas no existe tronco</p>
        <a href="../../index.php">Volver3</a>';
    require_once 'C:/wamp64/www/lista-simple/views/layout/footer.php';
}
?>

<!-- Contenido -->




<!-- Retocar al final, al menos del final de login -->


</div>

<!-- Pie de página -->
<?php require_once 'C:/wamp64/www/lista-simple/views/layout/footer.php'; ?>

<!-- Retocar al final, al menos del final de login -->