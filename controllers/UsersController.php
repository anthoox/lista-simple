<?php
require_once 'models/users.php';
require_once 'helpers/validatorForm.php';
require_once 'helpers/utils.php';

class UsersController
{
    public function index()
    {
        if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) {
            require_once  base_host . 'views/users/admin.php';
        }
        if (isset($_SESSION['user']) && $_SESSION['user'] == true) {
            require_once  base_host . 'views/users/index.php';
        } else {
            require_once base_host . 'views/users/home.php';
        }
    }

    /* A PARTIR DE AQUI CAMBIAR USER/ADMIN A ERROR/No */
    public function record()
    {   
        if (!isset($_SESSION['identity'])) {
            require_once base_host . 'views/login/record.php';
        } elseif (isset($_SESSION['admin']) && $_SESSION['admin'] == true) {

            require_once  base_host . 'views/users/admin.php';
        } elseif (isset($_SESSION['user']) && $_SESSION['user'] == true) {

            require_once  base_host . 'views/users/index.php';
        } else {

            require_once base_host . '/views/users/home.php';
        }
    }

    public function acount()
    {
        if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) {
            require_once  base_host . 'views/users/admin.php';
        }
        if (isset($_SESSION['user']) && $_SESSION['user'] == true) {
            require_once base_host . 'views/users/acount.php';
        } else {
            require_once base_host . 'views/users/home.php';
        }
    }

    public function editUser()
    {
        if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) {
            require_once base_host . 'views/users/edit-user.php';
        }
        if (isset($_SESSION['user']) && $_SESSION['user'] == true) {
            require_once base_host . 'views/users/index.php';
        } else {
            require_once base_host . 'views/users/home.php';
        }
    }

    public function editItem()
    {
        if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) {
            require_once base_host . 'views/users/admin.php';
        }
        if (isset($_SESSION['user']) && $_SESSION['user'] == true) {
            require_once base_host . 'views/users/edit-item.php';
        } else {
            require_once base_host . 'views/users/home.php';
        }
    }

    public function editList()
    {
        if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) {
            require_once base_host . 'views/users/admin.php';
        }
        if (isset($_SESSION['user']) && $_SESSION['user'] == true) {
            require_once base_host . 'views/users/edit-list.php';
        } else {
            require_once base_host . 'views/users/home.php';
        }
    }

    public function help()
    {
        if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) {
            require_once base_host . 'views/users/admin.php';
        }
        if (isset($_SESSION['user']) && $_SESSION['user'] == true) {
            require_once base_host . 'views/users/help.php';
        } else {
            require_once base_host . 'views/users/home.php';
        }
    }
    public function listInfo()
    {
        if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) {
            require_once base_host . 'views/users/admin.php';
        }
        if (isset($_SESSION['user']) && $_SESSION['user'] == true) {
            require_once base_host . 'views/users/list-info.php';
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
            require_once base_host . 'views/users/list.php';
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
            require_once base_host . 'views/users/trash.php';
        } else {
            require_once base_host . 'views/users/home.php';
        }
    }

    public function home()
    {
        require_once base_host . 'views/users/home.php';
    }

    public function save()
    {
        $dataUser = ValidatorForm::validator($_POST);

        if (!empty($dataUser)) {
            $username = $dataUser['username'];
            $email = $dataUser['email'];
            $password = $dataUser['password'];
            if ($username && $email && $password) {
                $user = new user();
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
                // Configuración de cookies
                $cookieTime = time() + (86400 * 30); // 30 días
                setcookie('user_email', $_POST['email'], $cookieTime, "/", "", true, true);
                setcookie('user_password', $_POST['password'], $cookieTime, "/", "", true, true);
                } else {
                    $_SESSION['error_login'] = 'Failed';
                }
            }
        
        require_once base_host . 'views/login/login.php';
    }
    
    


    public function logout()
    {

     

        if (isset($_SESSION['identity'])) {
            $userPrueba = $_SESSION['identity']->email;
            if ($userPrueba === 'prueba@prueba.com') {
                $user = new UsersController();
                $result = $user->deleteData($userPrueba);
            }
            unset($_SESSION['identity']);
            // Eliminar las cookies de usuario
            if (isset($_COOKIE['user_email'])) {
                setcookie('user_email', '', time() - 3600, '/'); // Establece la cookie con un tiempo pasado para eliminarla
            }
            if (isset($_COOKIE['user_password'])) {
                setcookie('user_password', '', time() - 3600, '/'); // Establece la cookie con un tiempo pasado para eliminarla
            }
        }

        if (isset($_SESSION['admin'])) {
            unset($_SESSION['admin']);
        }

        if (isset($_SESSION['user'])) {
            unset($_SESSION['user']);

        }

        header("Location:" . base_url);
        exit();
    }

    public function edit()
    {
        if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) {
            require_once base_host . 'views/users/admin.php';
        }
        if (isset($_SESSION['user']) && $_SESSION['user'] == true) {
            $userPrueba = $_SESSION['identity']->email;
            if (isset($_SESSION['identity']) && $userPrueba !== 'prueba@prueba.com') {
                // Si el email del usuario logado es distinto a prueba@prueba.com haz:
                if (isset($_POST['guardar'])) {
                    // Lógica para guardar los cambios
                    $dataUser = ValidatorForm::validator($_POST);

                    if (!empty($dataUser)) {
                        $user = new User();

                        $username = $dataUser['username'];
                        $email = $dataUser['email'];


                        // Guardar contraseña
                        if (isset($dataUser['password'])) {
                            $password = $dataUser['password'];
                            $user->setPassword($password);
                        }

                        // Guardar la imagen
                        if (isset($_FILES['file']) && $_FILES['file']['size'] != 0) {

                            $file = $_FILES['file'];
                            $fileName = $file['name'];
                            $mimeType = $file['type'];

                            if ($mimeType == "image/jpg" || $mimeType == "image/jpeg" || $mimeType == "image/png") {
                                if (!is_dir('uploads/images/' . $_SESSION['identity']->id . "/")) {
                                    mkdir('uploads/images/' . $_SESSION['identity']->id . "/", 0777, true);
                                }
                                move_uploaded_file($file['tmp_name'], 'uploads/images/' . $_SESSION['identity']->id . "/" . $file['name']);
                                $user->setImage($fileName);
                            }
                        }

                        if ($username && $email) {
                            $user->setUsername($username);
                            $user->setEmail($email);


                            $edit = $user->edit($dataUser);

                            if ($edit) {
                                $_SESSION['save'] = 'completed';
                                require_once base_host . 'views/users/acount.php';
                            } else {
                                $_SESSION['save'] = 'failed';

                                return false;
                            }
                        }
                    }
                } elseif (isset($_POST['descargar'])) {
                    // Lógica para descargar algo
                } elseif (isset($_POST['baja'])) {
                    // Lógica para darse de baja
                    $user = new User();
                    $result = $user->delete();

                    if ($result) {
                        $user = new UsersController();
                        $user->logout();
                    } else {
                        $_SESSION['save'] = "failed";
                        require_once base_host . 'views/users/acount.php';
                    }
                }
            } else {
                $_SESSION['save'] = 'prueba';
                require_once base_host . 'views/users/acount.php';
            }
        } else {
            require_once base_host . 'views/users/home.php';
        }
    }

    public function deleteData($email)
    {

        $user = new User();
        $result = $user->deleteData($email);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}
