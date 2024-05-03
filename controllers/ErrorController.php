<?php
class ErrorController
{
    public function index()
    {
        require_once 'C:/wamp64/www/lista-simple/views/layout/head.php';
        echo '
            <h1 class="display-2 fw-semibold">404</h1>
            <h2>La página que buscas no existe</h2>';
        echo '
            <!-- Pie de página -->';
        require_once 'C:/wamp64/www/lista-simple/views/layout/footer.php';
    }

    public function list()
    {
        echo '
        <div class="mt-5">
            <h2 class="mt-5">Ups, algo ha ido mal.</h2>
            <a href="' . base_url . 'lists/index" class="text-center text-black text-decoration-none">volver</a>
        </div>
            ';
    }
}
