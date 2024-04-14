<?php
require_once 'models/lists.php';
require_once 'helpers/validatorForm.php';
require_once 'helpers/utils.php';
class ListsController
{
    public function index()
    {
        echo "<h1>Controllador de lista, index</h1>";
    }

    // FUNCIONES DE FUNCIONAMIENTO
    public function save()
    {


        $dataList = ValidatorForm::valitatorList($_POST);

        if (!empty($dataList)) {
            $name = isset($dataList['name']) ? $dataList['name'] : false;
            $notification = isset($dataList['notification']) ? $dataList['notification'] : false;
            $description = isset($dataList['description']) ? $dataList['description'] : false;
            $list = new Lists();


            if ($name) {
                $list->setName($name);
            } else {
                $list->setName('Lista');
            }

            if ($notification) {
                $list->setNotification($notification);
            } else {
                $list->setNotification(null);
            }


            if ($description) {
                $list->setDescription($description);
            } else {
                $list->setDescription('');
            }

            $list->setModificationDate(date('Y-m-d'));


            $save = $list->save($_SESSION['identity']->id);
            if ($save) {
                $_SESSION['register'] = "complete";
            } else {
                $_SESSION['register'] = "failed";
            }
        } else {
            $_SESSION['register'] = "failed";
        }

        header("Location:" . base_url . "users/index");
    }

    public function lists()
    {
        $list = new Lists();
        $result = $list->lists($_SESSION['identity']->id);

        if ($result) {
            return $result;
        } else {
            return false;
        }
    }
}
