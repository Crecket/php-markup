<?php

namespace Crecket\PHPMarkup\Format;

class Formatted implements FormatInterface
{
    /**
     * @param $text
     * @return string
     */
    public static function get($text)
    {
        return '    ' . str_replace("\n", "\n    ", $text);
    }
}