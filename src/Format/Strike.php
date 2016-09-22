<?php

namespace Crecket\PHPMarkup\Format;

class Strike implements FormatInterface
{
    /**
     * @param $text
     * @return string
     */
    public static function get($text)
    {
        return '~~' . $text . '~~';
    }
}