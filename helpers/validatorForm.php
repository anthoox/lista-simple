<?php

class ValidatorForm
{
    public static function validator($dataForm)
    {
        $dataUser = '';
        $error = true;
        if (isset($dataForm)) {

            if (!empty($dataForm['username']) && !empty($dataForm['email'])) {
                $error = 'ok';

                // Si existe se añade a la variable el contenido, sino, la variable vale false
                $username = isset($dataForm['username']) ? $dataForm['username'] : false;
                $email = isset($dataForm['email']) ? $dataForm['email'] : false;


                // Validar nombre
                if (!is_string($username)) { // -> si no es un string o si no es un formato valido
                    $error = 'nombre';
                }

                // Validar email
                if (!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) { // Si no es un error o no es un email
                    $error = 'email';
                }



                $dataUser = array('username' => $username, 'email' => $email);
            }
            if (!empty($dataForm['password'])) {

                $password = isset($dataForm['password']) ? $dataForm['password'] : false;
                // Validar contraseña
                if (empty($password) || (strlen($password) < 4)) { // Si esta vacia o tiene menos de 5 caracteres
                    $error = 'contraseña';
                }
                $dataUser['password'] = $password;
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
