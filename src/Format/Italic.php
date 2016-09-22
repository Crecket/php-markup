<?php

namespace Crecket\PHPMarkup\Format;

class Italic implements FormatInterface
{
    public static function get($text)
    {
        return '*' . $text . '*';
    }
}