<?php

namespace Crecket\PHPMarkup\Format;

class Title2 implements FormatInterface
{
    public static function get($text)
    {
        return '## ' . $text;
    }
}