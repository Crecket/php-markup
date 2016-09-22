<?php

namespace Crecket\PHPMarkup\Format;

class Bold implements FormatInterface
{
    public static function get($text)
    {
        return '**' . $text . '**';
    }
}