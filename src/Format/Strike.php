<?php

namespace Crecket\PHPMarkup\Format;

class Strike implements FormatInterface
{
    public static function get($text)
    {
        return '~~' . $text . '~~';
    }
}