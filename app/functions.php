<?php

if (!function_exists('validate_email)')) {
    function validate_email($value)
    {
        return App\Helpers\Email::validate($value);
    }
}
