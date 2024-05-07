<?php
class ErrorController
{
    public function index()
    {
        require_once base_url2 . 'views/layout/head.php';
        echo '
            <h1 class="display-2 fw-semibold">404</h1>
            <h2>La página que buscas no existe</h2>
            <a class="text-center text-decoration-none text-primary-emphasis fw-medium " href="/lista-simple/">Volver</a>';
        echo '
            <!-- Pie de página -->';
        require_once base_url2 . 'views/layout/footer.php';
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
