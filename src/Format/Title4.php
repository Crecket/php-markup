<?php

namespace Crecket\PHPMarkup\Format;

class Title4 implements FormatInterface
{
    /**
     * @param $text
     * @return string
     */
    public static function get($text)
    {
        return '#### ' . $text;
    }
}