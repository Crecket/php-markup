<?php

namespace Crecket\PHPMarkup\Format;

class Formatted implements FormatInterface
{
    public static function get($text)
    {
        return '    ' . $text;
    }
}