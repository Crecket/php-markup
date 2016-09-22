<?php

namespace Crecket\PHPMarkup\Format;

interface FormatInterface
{

    /**
     * @param $text
     * @return mixed
     */
    public static function get($text);

}