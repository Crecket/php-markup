<?php

namespace Crecket\PHPMarkup\Format;

class InlineFormatted implements FormatInterface
{
    public static function get($text)
    {
        return '`' . $text.'`';
    }
}