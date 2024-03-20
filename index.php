<!-- Cabeceras -->
<?php require_once 'autoload.php'; ?>
<?php require_once 'C:/wamp64/www/lista-simple/views/layout/head.php'; ?>

<?php
if (isset($_GET['controller'])) {
    $nombre_controlador = $_GET['controller'] . 'Controller';
} else {
    echo "La pagina que buscas no existe";
    // exit() detiene la ejecución.
    exit();
}


if (class_exists($nombre_controlador)) {
    $controlador = new $nombre_controlador();
    if (isset($_GET['action']) && method_exists($controlador, $_GET['action'])) {
        $action = $_GET['action'];
        $controlador->$action();
    } else {
        echo 'La pagiana que buscas no EXISTE';
    }
} else {
    echo 'La pagiana que buscas no existeeee';
}
?>

<!-- Contenido -->


<a type="button" class="movil-sm btn btn-primary rounded-1 mb-2 align-self-center text-white col-12 col-sm-8  col-md-7" href="/lista-simple/views/login/login.php">Acceso</a>
<a type="button" class="movil-sm btn btn-success rounded-1 mb-2  align-self-center text-white col-12 col-sm-8  col-md-7" href="/lista-simple/views/login/registro.php">Registro</a>
</div>

<!-- Pie de página -->
<?php require_once 'C:/wamp64/www/lista-simple/views/layout/footer.php'; ?>