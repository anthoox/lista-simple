<?php
require_once 'models/lists.php';
require_once 'helpers/validatorForm.php';
require_once 'helpers/utils.php';
class listsController
{

    // FUNCIONES DE FUNCIONAMIENTO
    public function save()
    {

        if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) {
            require_once base_host . 'views/users/admin.php';
        }
        if (isset($_SESSION['user']) && $_SESSION['user'] == true) {
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
                    $list->setNotification('0000-00-00 00:00:00');
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
        } else {
            require_once base_url . 'views/users/home.php';
        }
    }

    public function index()
    {
        if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) {
            require_once base_host . 'views/users/admin.php';
        }
        if (isset($_SESSION['user']) && $_SESSION['user'] == true) {

            $list = new Lists();
            $result = $list->lists($_SESSION['identity']->id);
            $_SESSION['color'] = 'index';
            $_SESSION['icon'] = 0;
            if ($result) {
                require_once  base_host . 'views/users/index.php';
                return $result;
            } else {

                require_once  base_host . 'views/users/index.php';
                return $result;
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
            $list = new Lists();
            $result = $list->completed($_SESSION['identity']->id);
            $_SESSION['color'] = 'completed';


            if ($result) {
                require_once  base_host . 'views/users/index.php';
                $result['color'] = 'completed';

                return $result;
            } else {
                $result = 2;
                require_once  base_host . 'views/users/index.php';
                return $result;
            }
        } else {
            require_once base_host . 'views/users/home.php';
        }
    }


    public function list()
    {
        if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) {
            require_once base_host . 'views/users/admin.php';
        }
        if (isset($_SESSION['user']) && $_SESSION['user'] == true) {
            $listId = $_GET['id'];
            $list = new Lists();
            $result = $list->list($listId);

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

    public function getList($id)
    {
        if (!isset($_SESSION['identity'])) {
            require_once base_host . 'views/login/record.php';
        } elseif (isset($_SESSION['admin']) && $_SESSION['admin'] == true) {
            require_once  base_host . 'views/users/admin.php';
        } elseif (isset($_SESSION['user']) && $_SESSION['user'] == true) {
            if (isset($_GET['id'])) {
                $listId = $_GET['id'];
                $list = new Lists();
                $result = $list->getList($listId);

                if ($result) {

                    return $result;
                } else {
                    $error = new ErrorController();
                    $error->list();
                    die();
                }
            } else {
                $listId = $id;
                $list = new Lists();
                $result = $list->getList($listId);

                if ($result) {

                    return $result;
                } else {
                    $error = new ErrorController();
                    $error->list();
                    die();
                }
            }
        }
    }

    public function edit()
    {
        if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) {
            require_once base_host . 'views/users/admin.php';
        }
        if (isset($_SESSION['user']) && $_SESSION['user'] == true) {
            $dataList = ValidatorForm::valitatorList($_POST);

            $list = new Lists();
            $result = $list->edit($dataList);
            if ($result) {
                $list = new Lists();
                $result = $list->lists($_SESSION['identity']->id);


                if ($result) {
                    require_once  base_host . 'views/users/index.php';
                    return $result;
                } else {
                    require_once  base_host . 'views/users/index.php';
                    $result = 1;
                    return $result;
                }
            }
        } else {
            require_once base_host . 'views/users/home.php';
        }
    }

    public function trash()
    {
        if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) {
            require_once base_host . 'views/users/admin.php';
        }
        if (isset($_SESSION['user']) && $_SESSION['user'] == true) {
            $id = $_GET['id'];

            $list = new Lists();
            $result = $list->trash($id);
            if ($result) {
                $list = new Lists();
                $result = $list->lists($_SESSION['identity']->id);
                if ($result) {
                    require_once  base_host . 'views/users/index.php';
                    return $result;
                } else {
                    require_once  base_host . 'views/users/index.php';
                    $result = 1;
                    return $result;
                }
            } else {
                // Si no se encuentra la lista, devolver un mensaje de error
                http_response_code(404);
                echo json_encode(array('message' => 'Lista no encontrada'));
            }
        } else {
            require_once base_host . 'views/users/home.php';
        }
    }

    public function paper_bin()
    {
        if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) {
            require_once base_host . 'views/users/admin.php';
        }
        if (isset($_SESSION['user']) && $_SESSION['user'] == true) {
            $list = new Lists();
            $result = $list->paper_bin();
            if ($result) {
                $dataList = $result->fetch_all();
                if (!empty($dataList)) {
                    require_once  base_host . 'views/users/trash.php';

                    return $dataList;
                } else {
                    return false;
                }
            } else {
                require_once  base_host . 'views/users/trash.php';
                $result = 1;
                return false;
            }
        } else {
            require_once base_host . 'views/users/home.php';
        }
    }

    public function rest()
    {
        if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) {
            require_once base_host . 'views/users/admin.php';
        }
        if (isset($_SESSION['user']) && $_SESSION['user'] == true) {
            $id = $_GET['id'];

            $list = new Lists();
            $result = $list->rest($id);
            if ($result) {
                require_once  base_host . 'views/users/trash.php';
            } else {
                require_once  base_host . 'views/users/trash.php';
                echo '<h2>error al restaurar lista</h2>';
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

            $list = new Lists();
            $result = $list->del($id);
            if ($result) {
                require_once  base_host . 'views/users/trash.php';
            } else {
                require_once  base_host . 'views/users/trash.php';
                echo '<h2>error al eleminar lista</h2>';
            }
        } else {
            require_once base_host . 'views/users/home.php';
        }
    }

    public function restoreAll()
    {
        if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) {
            require_once base_host . 'views/users/admin.php';
        }
        if (isset($_SESSION['user']) && $_SESSION['user'] == true) {
            $list = new Lists();
            $result = $list->restoreAll($_SESSION['identity']->id);
            if ($result) {
                require_once  base_host . 'views/users/trash.php';
            } else {
                require_once  base_host . 'views/users/trash.php';
                echo '<h2>error al restaurar lista</h2>';
            }
        } else {
            require_once base_host . 'views/users/home.php';
        }
    }

    public function deleteAll()
    {
        if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) {
            require_once base_host . 'views/users/admin.php';
        }
        if (isset($_SESSION['user']) && $_SESSION['user'] == true) {
            $list = new Lists();
            $result = $list->deleteAll($_SESSION['identity']->id);
            if ($result) {
                require_once  base_host . 'views/users/trash.php';
            } else {
                require_once  base_host . 'views/users/trash.php';
                echo '<h2>error al eleminar lista</h2>';
            }
        } else {
            require_once base_host . 'views/users/home.php';
        }
    }

    public function completeList($idList, $completed)
    {
        if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) {
            require_once base_host . 'views/users/admin.php';
        }
        if (isset($_SESSION['user']) && $_SESSION['user'] == true) {
            $list = new Lists();
            $result = $list->completeList($idList, $completed);
            if ($result) {
                return true;
            } else {
                return false;
            }
        } else {
            require_once base_host . 'views/users/home.php';
        }
    }
}
