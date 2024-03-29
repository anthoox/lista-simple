<?php

class ValidatorForm
{
    public static function validator($dataForm)
    {
        $dataUser = '';
        $error = true;
        if (isset($dataForm)) {
            if ( // Si no esta vacio ningún valor del array
                !empty($dataForm['username']) && !empty($dataForm['email'])
                && !empty($dataForm['password'])
            ) {
                $error = 'ok';
                // Si existe se añade a la variable el contenido, sino, la variable vale false
                $username = isset($dataForm['username']) ? $dataForm['username'] : false;
                $email = isset($dataForm['email']) ? $dataForm['email'] : false;
                $password = isset($dataForm['password']) ? $dataForm['password'] : false;

                // Validar nombre
                if (!is_string($username) || preg_match("/[0-9]+/", $username)) { // -> si no es un string o si no es un formato valido
                    $error = 'nombre';
                }

                // Validar email
                if (!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) { // Si no es un error o no es un email
                    $error = 'email';
                }

                // Validar contraseña
                if (empty($password) || (strlen($password) < 4)) { // Si esta vacia o tiene menos de 5 caracteres
                    $error = 'contraseña';
                }

                $dataUser = array('username' => $username, 'email' => $email, 'password' => $password);
            }
        } else {
            return false;
        }

        if ($error != 'ok') {
            return false;
        } else {
            return $dataUser;
        }
    }
}
