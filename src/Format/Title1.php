<?php

namespace Crecket\PHPMarkup\Format;

class Title1 implements FormatInterface
{
    public static function get($text)
    {
        return '# ' . $text;
    }
}