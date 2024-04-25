<?php
require_once 'models/items.php';
require_once 'helpers/validatorForm.php';
require_once 'helpers/utils.php';
class ItemsController
{
    public function index()
    {
        $itemId = $_GET['id'];

        $items = new Items();
        $result = $items->items($itemId);
        require_once  'C:/wamp64/www/lista-simple/views/users/list.php';

        return $result;
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
}
