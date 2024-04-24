<?php
require_once 'models/items.php';
require_once 'helpers/validatorForm.php';
require_once 'helpers/utils.php';
class ItemsController
{
    public function index()
    {
        // var_dump($_GET);
        // die();
        // localhost/lista-simple/items/index&id=11
        $listId = $_GET['id'];

        $items = new Items();
        $result = $items->items($listId);
        require_once  'C:/wamp64/www/lista-simple/views/users/list.php';

        echo "<h1>Controllador de items, index</h1>";
    }
}
