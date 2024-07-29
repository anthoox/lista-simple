<?php
require_once 'models/items.php';
require_once 'helpers/validatorForm.php';
require_once 'helpers/utils.php';
class itemsController
{
    public function index($id = '')
    {
        if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) {
            require_once base_host . 'views/users/admin.php';
        }
        if (isset($_SESSION['user']) && $_SESSION['user'] == true) {
            $_SESSION['icon'] = 1;
            if (isset($_GET['id']) && $id == '') {
                $listId = $_GET['id'];

                $items = new Items();
                $result = $items->items($listId);
                require_once  base_host . 'views/users/list.php';

                return $result;
            } else if ($id != '') {
                $listId = $id;

                $items = new Items();
                $result = $items->items($listId);

                header("Location:" . base_url . "items/index&id=" . $listId);
    
                
                return $result;
            }
        } else {
            require_once base_host . 'views/users/home.php';
        }
        require_once base_host . 'views/users/home.php';
    }

    public function save()
    {
        if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) {
            require_once base_host . 'views/users/admin.php';
        }
        if (isset($_SESSION['user']) && $_SESSION['user'] == true) {
            $dataItem = ValidatorForm::validatorItem($_POST);


            if (!empty($dataItem)) {
                $name = isset($dataItem['name']) ? $dataItem['name'] : false;
                // $notification = isset($dataItem['notification']) ? $dataItem['notification'] : false;
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


                // if ($notification) {
                //     $item->setNotification($notification);
                // } else {
                //     $item->setNotification(null);
                // }


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
            }

            header("Location:" . base_url . "items/index&id=" . $idList);
        } else {
            require_once base_host . 'views/users/home.php';
        }
    }

    public function getItem()
    {
        if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) {
            require_once base_host . 'views/users/admin.php';
        }
        if (isset($_SESSION['user']) && $_SESSION['user'] == true) {
            $listId = $_GET['id'];

            $item = new Items();
            $result = $item->getItem($listId);

            if ($result) {
                // Devolver el resultado como JSON
                echo json_encode($result);
            } else {
                // Si no se encuentra la lista, devolver un mensaje de error
                http_response_code(404);
                echo json_encode(array('message' => 'Lista no encontrada'));
            }
        } else {
            require_once base_host . 'views/users/home.php';
        }
    }

    public function edit()
    {
        if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) {
            require_once base_host . 'views/users/admin.php';
        }
        if (isset($_SESSION['user']) && $_SESSION['user'] == true) {

            $dataItem = ValidatorForm::validatorItem($_POST);  

            $item = new Items();

            $result = $item->edit($dataItem);
       
            if ($result) {
                $list = new ItemsController();
                $list->index($dataItem['idList']);
            }
        } else {
            require_once base_host . 'views/users/home.php';
        }
    }

    public function del()
    {
        if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) {
            require_once base_host . 'views/users/admin.php';
        }
        if (isset($_SESSION['user']) && $_SESSION['user'] == true) {
            $id = $_GET['id'];

            $item = new Items();
            $result = $item->del($id);
            if ($result) {
                require_once  base_host . 'views/users/list.php';
            } else {
                require_once  base_host . 'views/users/list.php';
                echo '<h2>error al eleminar item</h2>';
            }
        } else {
            require_once base_host . 'views/users/home.php';
        }
    }

    public function numItems($idList)
    {
        if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) {
            require_once base_host . 'views/users/admin.php';
        }
        if (isset($_SESSION['user']) && $_SESSION['user'] == true) {
            $items = new Items();
            $result = $items->getItemsInfo($idList);
            if ($result) {

                return $result;
            } else {
                return false;
            }
        } else {
            require_once base_host . 'views/users/home.php';
        }
    }

    public function totalPrice($idList)
    {
        if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) {
            require_once base_host . 'views/users/admin.php';
        }
        if (isset($_SESSION['user']) && $_SESSION['user'] == true) {
            $items = new Items();
            $result = $items->totalPrice($idList);
            if ($result) {

                return $result;
            } else {
                return false;
            }
        } else {
            require_once base_host . 'views/users/home.php';
        }
    }

    public function completed()
    {
        if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) {
            require_once base_host . 'views/users/admin.php';
        }
        if (isset($_SESSION['user']) && $_SESSION['user'] == true) {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Obtener el ID del elemento y el estado completado del cuerpo de la solicitud
                $idItem = $_POST['id'];
                $completed = $_POST['completed'];

                $item = new Items();
                $result = $item->completed($idItem, $completed);


                if ($result) {
                    // La actualización fue exitosa
                    echo json_encode(['message' => 'Estado actualizado correctamente']);
                } else {
                    // Error al actualizar
                    http_response_code(500);
                    echo json_encode(['error' => 'Error al actualizar el estado']);
                }
            } else {
                // Método de solicitud no válido
                http_response_code(405);
                echo json_encode(['error' => 'Método no permitido']);
            }
            require_once  base_host . 'views/users/list.php';
        } else {
            require_once base_host . 'views/users/home.php';
        }
    }
}
