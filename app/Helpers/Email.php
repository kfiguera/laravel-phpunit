<?php

namespace App\Helpers;

class Email
{
    /**
     * Validar Correo Electrónico
     * @param $value
     * @return bool
     */
    public static function validate($value)
    {
        return (bool)filter_var($value, FILTER_VALIDATE_EMAIL);
    }
}
