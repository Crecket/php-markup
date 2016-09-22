<?php

namespace Crecket\PHPMarkup\Format;

class Title4 implements FormatInterface
{
    public static function get($text)
    {
        return '#### ' . $text;
    }
}