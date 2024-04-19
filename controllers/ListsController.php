<?php
require_once 'models/lists.php';
require_once 'helpers/validatorForm.php';
require_once 'helpers/utils.php';
class ListsController
{

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

        header("Location:" . base_url . "lists/index");
    }

    public function index()
    {
        $list = new Lists();
        $result = $list->lists($_SESSION['identity']->id);


        if ($result) {
            require_once  'C:/wamp64/www/lista-simple/views/users/index.php';
            return $result;
        } else {
            require_once  'C:/wamp64/www/lista-simple/views/users/index.php';
            return $result;
        }
    }

    public function upcoming()
    {
        $list = new Lists();
        $result = $list->upcoming($_SESSION['identity']->id);


        if ($result) {
            require_once  'C:/wamp64/www/lista-simple/views/users/index.php';
            return $result;
        } else {
            require_once  'C:/wamp64/www/lista-simple/views/users/index.php';
            return false;
        }
    }

    public function pending()
    {
        $list = new Lists();
        $result = $list->pending($_SESSION['identity']->id);


        if ($result) {
            require_once  'C:/wamp64/www/lista-simple/views/users/index.php';
            return $result;
        } else {
            require_once  'C:/wamp64/www/lista-simple/views/users/index.php';
            return false;
        }
    }

    public function completed()
    {
        $list = new Lists();
        $result = $list->completed($_SESSION['identity']->id);


        if ($result) {
            require_once  'C:/wamp64/www/lista-simple/views/users/index.php';
            return $result;
        } else {
            require_once  'C:/wamp64/www/lista-simple/views/users/index.php';
            return false;
        }
    }


    public function list()
    {
        $id = $_GET['id'];
        $list = new Lists();
        $result = $list->list($id);

        if ($result) {
            // Devolver el resultado como JSON
            header('Content-Type: application/json');
            echo json_encode($result);
        } else {
            // Si no se encuentra la lista, devolver un mensaje de error
            http_response_code(404);
            echo json_encode(array('message' => 'Lista no encontrada'));
        }
    }

    public function edit()
    {
        $dataList = ValidatorForm::valitatorList($_POST);
        if (!isset($dataList['notification'])) {
            $dataList['notification'] = "0000-00-00 00:00:00";
        }
        if (!isset($dataList['description'])) {
            $dataList['description'] = "";
        }


        $list = new Lists();
        $result = $list->edit($dataList);
        if ($result) {
            $list = new Lists();
            $result = $list->lists($_SESSION['identity']->id);


            if ($result) {
                require_once  'C:/wamp64/www/lista-simple/views/users/index.php';
                return $result;
            } else {
                require_once  'C:/wamp64/www/lista-simple/views/users/index.php';
                $result = 1;
                return $result;
            }
        }
    }

    public function trash()
    {
        $id = $_GET['id'];

        $list = new Lists();
        $result = $list->trash($id);
        if ($result) {
            $list = new Lists();
            $result = $list->lists($_SESSION['identity']->id);
            if ($result) {
                require_once  'C:/wamp64/www/lista-simple/views/users/index.php';
                return $result;
            } else {
                require_once  'C:/wamp64/www/lista-simple/views/users/index.php';
                $result = 1;
                return $result;
            }
            // Devolver el resultado como JSON
            // header('Content-Type: application/json');
            // echo json_encode($result);
        } else {
            // Si no se encuentra la lista, devolver un mensaje de error
            http_response_code(404);
            echo json_encode(array('message' => 'Lista no encontrada'));
        }
    }
}
