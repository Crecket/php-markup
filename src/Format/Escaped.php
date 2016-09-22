<?php

namespace Crecket\PHPMarkup\Format;

class Escaped implements FormatInterface
{
    /**
     * @param $text
     * @return string
     */
    public static function get($text)
    {
        return addcslashes($text, '()[]*~^');;
    }
}