<?php

namespace Crecket\PHPMarkup\Format;

class Title3 implements FormatInterface
{
    public static function get($text)
    {
        return '### ' . $text;
    }
}