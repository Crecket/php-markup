<?php

namespace Crecket\PHPMarkup\Format;

class Escaped implements FormatInterface
{
    public static function get($text)
    {
        return addcslashes($text, '()[]*~^');;
    }
}