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
}
