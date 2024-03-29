<?php
require_once  'models/users.php';
require_once 'helpers/validatorForm.php';
class UsersController
{
    public function index()
    {
        // Renderiza vista
        require_once 'C:/wamp64/www/lista-simple/views/users/index.php';
    }


    public function record()
    {
        require_once 'C:/wamp64/www/lista-simple/views/login/record.php';
    }

    public function home()
    {
        require_once 'C:/wamp64/www/lista-simple/home.php';
    }

    public function save()
    {
        $dataUser = ValidatorForm::validator($_POST);

        if (isset($dataUser)) {
            $username = $dataUser['username'];
            $email = $dataUser['email'];
            $password = $dataUser['password'];
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
        header("Location:" . base_url . "users/record");
    }
}
