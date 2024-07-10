<?php
class Utils
{
    public static function deleteSession($name)
    {
        if (isset($_SESSION[$name])) {
            unset($_SESSION[$name]);
        }
    }

    // public static function dateFormatter($hora)
    // {
    //     // Convertir la cadena a un objeto DateTime
    //     $dateTime = date_create($hora);

    //     // Obtener la hora y los minutos en formato HH:MM
    //     $horaMinutos = date_format($dateTime, "H:i");

    //     // Obtener el día, el mes y el año en formato DD/MM/YYYY
    //     $diaMesAnio = date_format($dateTime, "d/m/Y");

    //     // Formar la cadena en el formato deseado
    //     $nuevaFechaHora = $horaMinutos . " " . $diaMesAnio;

    //     return $nuevaFechaHora;
    // }
}
