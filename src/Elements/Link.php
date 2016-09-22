<?php

namespace Crecket\PHPMarkup\Elements;

class Link
{

    private $text;
    private $link;

    /**
     * Link constructor.
     */
    public function __construct()
    {
    }

    /**
     * @param $text
     * @param $link
     * @return $this
     */
    public function set($text, $link)
    {
        $this->text = $text;
        $this->link = $link;
        return $this;
    }

    /**
     * @return string
     */
    public function get_markup()
    {
        return '[' . $this->text . '](' . $this->link . ')';
    }
}