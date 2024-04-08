<?php
require_once 'models/users.php';
require_once 'helpers/validatorForm.php';
class UsersController
{
    public function index()
    {
        if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) {
            require_once  'C:/wamp64/www/lista-simple/views/users/admin.php';
        }
        if (isset($_SESSION['user']) && $_SESSION['user'] == true) {
            require_once  'C:/wamp64/www/lista-simple/views/users/index.php';
        }
    }

    /* A PARTIR DE AQUI CAMBIAR USER/ADMIN A ERROR/No */
    public function record()
    {
        if (!isset($_SESSION['identity'])) {
            require_once 'C:/wamp64/www/lista-simple/views/login/record.php';
        } elseif (isset($_SESSION['admin']) && $_SESSION['admin'] == true) {
            require_once  'C:/wamp64/www/lista-simple/views/users/admin.php';
        } elseif (isset($_SESSION['user']) && $_SESSION['user'] == true) {
            require_once  'C:/wamp64/www/lista-simple/views/users/index.php';
        }
    }

    public function acount()
    {
        if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) {
            require_once  'C:/wamp64/www/lista-simple/views/users/admin.php';
        }
        if (isset($_SESSION['user']) && $_SESSION['user'] == true) {
            require_once 'C:/wamp64/www/lista-simple/views/users/acount.php';
        }
    }

    public function editUser()
    {
        if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) {
            require_once 'C:/wamp64/www/lista-simple/views/users/edit-user.php';
        }
        if (isset($_SESSION['user']) && $_SESSION['user'] == true) {
            require_once 'C:/wamp64/www/lista-simple/views/users/index.php';
        }
    }

    public function editItem()
    {
        if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) {
            require_once 'C:/wamp64/www/lista-simple/views/users/admin.php';
        }
        if (isset($_SESSION['user']) && $_SESSION['user'] == true) {
            require_once 'C:/wamp64/www/lista-simple/views/users/edit-item.php';
        }
    }

    public function editList()
    {
        if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) {
            require_once 'C:/wamp64/www/lista-simple/views/users/admin.php';
        }
        if (isset($_SESSION['user']) && $_SESSION['user'] == true) {
            require_once 'C:/wamp64/www/lista-simple/views/users/edit-list.php';
        }
    }

    public function help()
    {
        if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) {
            require_once 'C:/wamp64/www/lista-simple/views/users/admin.php';
        }
        if (isset($_SESSION['user']) && $_SESSION['user'] == true) {
            require_once 'C:/wamp64/www/lista-simple/views/users/help.php';
        }
    }
    public function listInfo()
    {
        if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) {
            require_once 'C:/wamp64/www/lista-simple/views/users/admin.php';
        }
        if (isset($_SESSION['user']) && $_SESSION['user'] == true) {
            require_once 'C:/wamp64/www/lista-simple/views/users/list-info.php';
        }
    }
    public function list()
    {
        if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) {
            require_once 'C:/wamp64/www/lista-simple/views/users/admin.php';
        }
        if (isset($_SESSION['user']) && $_SESSION['user'] == true) {
            require_once 'C:/wamp64/www/lista-simple/views/users/list.php';
        }
    }
    public function trash()
    {
        if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) {
            require_once 'C:/wamp64/www/lista-simple/views/users/admin.php';
        }
        if (isset($_SESSION['user']) && $_SESSION['user'] == true) {
            require_once 'C:/wamp64/www/lista-simple/views/users/trash.php';
        }
    }

    public function home()
    {
        require_once 'C:/wamp64/www/lista-simple/home.php';
    }

    // FUNCIONES DE FUNCIONAMIENTO
    public function save()
    {
        $dataUser = ValidatorForm::validator($_POST);

        if (!empty($dataUser)) {
            $username = $dataUser['username'];
            $email = $dataUser['email'];
            $password = $dataUser['password'];
            if ($username && $email && $password) {
                $user = new User();
                $user->setUsername($username);
                $user->setEmail($email);
                $user->setPassword($password);
                $save = $user->save();
                if ($save) {
                    $_SESSION['register'] = "complete";
                } else {
                    $_SESSION['register'] = "failed";
                }
            } else {
                $_SESSION['register'] = "failed";
            }
        } else {
            $_SESSION['register'] = "failed";
        }
        header("Location:" . base_url . "users/record");
    }

    public function login()
    {
        if ($_POST) {
            // Identificar usuario
            $user = new User();
            $user->setEmail($_POST['email']);
            $user->setPassword($_POST['password']);
            // Consulta a la base de datos
            $identity = $user->login();
            // Iniciar la sesión
            if ($identity && is_object($identity)) {
                $_SESSION['identity'] = $identity;
                if ($identity->rol == 1) {
                    $_SESSION['admin'] = true;
                } elseif ($identity->rol == 2) {
                    $_SESSION['user'] = true;
                }
            } else {
                $_SESSION['error_login'] = 'Failed';
            }
        }
        require_once 'C:/wamp64/www/lista-simple/views/login/login.php';
    }

    public function logout()
    {

        if (isset($_SESSION['identity'])) {
            unset($_SESSION['identity']);
        }

        if (isset($_SESSION['admin'])) {
            unset($_SESSION['admin']);
        }

        if (isset($_SESSION['user'])) {
            unset($_SESSION['user']);
        }

        header("Location:" . base_url);
    }
}
