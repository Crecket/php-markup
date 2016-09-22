<?php

namespace Crecket\PHPMarkup\Elements;

class NewLine implements ElementInterface
{

    private $html_mode;

    public function __construct($html_mode)
    {
        $this->html_mode = $html_mode;
    }

    public function get_markup()
    {
        return $this->html_mode ? "<br>" : "\n";
    }

}