<?php

namespace Crecket\PHPMarkup\Format;

class Bold implements FormatInterface
{
    /**
     * @param $text
     * @return string
     */
    public static function get($text)
    {
        return '**' . $text . '**';
    }
}