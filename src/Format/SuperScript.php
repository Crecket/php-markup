<?php

namespace Crecket\PHPMarkup\Format;

class SuperScript implements FormatInterface
{
    public static function get($text)
    {
        $words = explode(" ", $text);
        $text = implode(" ^", $words);
        return '^' . $text;
    }
}