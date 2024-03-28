<?php
class UsersController
{
    public function index()
    {
        // Renderiza vista
        require_once 'C:/wamp64/www/lista-simple/views/users/listas.php';
    }


    public function registro()
    {
        require_once 'C:/wamp64/www/lista-simple/views/login/registro.php';
    }

    public function save()
    {
        if (isset($_POST)) {
            var_dump($_POST);
        }
    }
}
