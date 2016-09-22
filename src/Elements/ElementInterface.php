<?php

namespace Crecket\PHPMarkup\Elements;

interface ElementInterface
{

    public function __construct($options);

    public function get_markup();

}