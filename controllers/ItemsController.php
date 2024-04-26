<?php
require_once 'models/items.php';
require_once 'helpers/validatorForm.php';
require_once 'helpers/utils.php';
class ItemsController
{
    public function index($id = '')
    {
        if (isset($_GET['id']) && $id == '') {
            $itemId = $_GET['id'];

            $items = new Items();
            $result = $items->items($itemId);
            require_once  'C:/wamp64/www/lista-simple/views/users/list.php';

            return $result;
        } else if ($id != '') {
            $itemId = $id;

            $items = new Items();
            $result = $items->items($itemId);
            require_once  'C:/wamp64/www/lista-simple/views/users/list.php';

            return $result;
        }
    }

    public function save()
    {


        $dataItem = ValidatorForm::validatorItem($_POST);


        if (!empty($dataItem)) {
            $name = isset($dataItem['name']) ? $dataItem['name'] : false;
            $notification = isset($dataItem['notification']) ? $dataItem['notification'] : false;
            $notes = isset($dataItem['notes']) ? $dataItem['notes'] : false;
            $price = isset($dataItem['price']) ? $dataItem['price'] : false;
            $units = isset($dataItem['units']) ? $dataItem['units'] : false;
            $idUser = isset($dataItem['idUser']) ? $dataItem['idUser'] : false;
            $idList = isset($dataItem['idList']) ? $dataItem['idList'] : false;

            $item = new Items();


            if ($name) {
                $item->setName($name);
            } else {
                $item->setName('ítem');
            }


            if ($notification) {
                $item->setNotification($notification);
            } else {
                $item->setNotification(null);
            }


            if ($notes) {
                $item->setNotes($notes);
            } else {
                $item->setNotes('');
            }

            if ($price) {
                $item->setPrice($price);
            } else {
                $item->setPrice(0);
            }

            if ($units) {
                $item->setUnits($units);
            } else {
                $item->setUnits(1);
            }

            if ($idList) {
                $item->setListId($idList);
            }

            if ($idUser) {
                $item->setUserId($idUser);
            }


            $save = $item->save($idList, $idUser);
            if ($save) {
                $_SESSION['register_item'] = "complete";
            } else {
                $_SESSION['register_item'] = "failed";
            }
        } else {
            $_SESSION['register_item'] = "failed";
            // faltan control de errores
        }

        header("Location:" . base_url . "items/index&id=" . $idList);
    }

    public function getItem()
    {
        $listId = $_GET['id'];

        $item = new Items();
        $result = $item->getItem($listId);

        if ($result) {
            // Devolver el resultado como JSON
            // header('Content-Type: application/json');
            echo json_encode($result);
            // return $result;
        } else {
            // Si no se encuentra la lista, devolver un mensaje de error
            http_response_code(404);
            echo json_encode(array('message' => 'Lista no encontrada'));
        }
    }

    public function edit()
    {

        $dataItem = ValidatorForm::validatorItem($_POST);


        if (!isset($dataItem['notification'])) {
            $dataItem['notification'] = "0000-00-00 00:00:00";
        }
        if (!isset($dataItem['notes'])) {
            $dataItem['notes'] = "";
        }


        $item = new Items();

        $result = $item->edit($dataItem);


        if ($result) {
            $list = new ItemsController();
            $list->index($dataItem['idList']);
        }
    }

    public function del()
    {
        $id = $_GET['id'];

        $item = new Items();
        $result = $item->del($id);
        if ($result) {
            require_once  'C:/wamp64/www/lista-simple/views/users/list.php';
        } else {
            require_once  'C:/wamp64/www/lista-simple/views/users/list.php';
            echo '<h2>error al eleminar item</h2>';
        }
    }
}
