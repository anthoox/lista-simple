<?php
// class Cookies{
//     public static function cookiesHome(){
//         if (isset($_COOKIE['user_email']) && isset($_COOKIE['user_password'])) {


//             // Identificar usuario
//             $user = new User();
//             $user->setEmail($_COOKIE['user_email']);
//             $user->setPassword($_COOKIE['user_password']);

//             // Consulta a la base de datos
//             $identity = $user->login();

//             // Iniciar la sesión
//             if ($identity && is_object($identity)) {
//                 $_SESSION['identity'] = $identity;
//                 if ($identity->rol == 1) {
//                     $_SESSION['admin'] = true;
//                 } elseif ($identity->rol == 2) {
//                     $_SESSION['user'] = true;
//                 }
//             }
//             require_once base_host . 'views/login/login.php';
//         }
//     }
// }