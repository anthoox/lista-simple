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
                if (empty($password) || (strlen($password) < 5)) { // Si esta vacia o tiene menos de 5 caracteres
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

    public static function valitatorList($dataForm)
    {


        $dataList = '';
        $error = true;
        if (isset($dataForm)) {


            $dataList = array();

            if (!empty($dataForm['name'])) {
                $error = 'ok';

                $name = isset($dataForm['name']) ? $dataForm['name'] : false;

                if (!is_string($name)) {
                    $error = 'nombre';
                }

                $dataList['name'] = $name;
            }


            if (isset($dataForm['idList'])) {
                $dataList['id'] = $dataForm['idList'];
            }
        } else {
            return false;
        }

        if ($error != 'ok') {
            return false;
        } else {

            return $dataList;
        }
    }

    public static function validatorItem($dataForm)
    {


        $dataList = '';
        $error = true;

        if (isset($dataForm)) {


            $dataList = array();

            if (!empty($dataForm['name'])) {
                $error = 'ok';

                $name = isset($dataForm['name']) ? $dataForm['name'] : false;

                if (!is_string($name)) {
                    $error = 'nombre';
                }

                $dataList['name'] = $name;
            }



            // if (!empty($dataForm['notes'])) {
            //     $notes = isset($dataForm['notes']) ? $dataForm['notes'] : false;

            //     if (!is_string($notes)) {
            //         $error = 'notes';
            //     }
            //     $dataList['notes'] = $notes;
            // } else {
            //     $dataList['notes'] = "";
            // }

            if (!empty($dataForm['price'])) {
                $price = isset($dataForm['price']) ? $dataForm['price'] : "0";

                if (!is_string($price)) {
                    $error = 'price';
                }
                $dataList['price'] = $price;
            } else {
                $dataList['price'] = 0.00;
            }

            if (!empty($dataForm['units'])) {
                $units = isset($dataForm['units']) ? $dataForm['units'] : "0";

                $dataList['units'] = $units;
            } else {
                $dataList['units'] = 1;
            }

            if (isset($dataForm['idList'])) {
                $dataList['idList'] = $dataForm['idList'];
            }
            if (isset($dataForm['idItem'])) {
                $dataList['idItem'] = $dataForm['idItem'];
            }
            if (isset($dataForm['idUser'])) {
                $dataList['idUser'] = $dataForm['idUser'];
            }
        } else {
            return false;
        }

        if ($error != 'ok') {
            return false;
        } else {

            return $dataList;
        }
    }
}
