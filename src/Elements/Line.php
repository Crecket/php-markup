<?php

namespace Crecket\PHPMarkup\Elements;

class Line
{


    private $newline;

    private $text;

    /**
     * Text constructor.
     * @param $newline
     */
    public function __construct($newline)
    {
        $this->newline = $newline;
    }

    /**
     * @param $text
     * @return $this
     */
    public function set($text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * @return string
     */
    public function get_markup()
    {
        $result_markup = '';

        // extra new line boolean
        $result_markup .= $this->newline ? "\n\n" : "\n";

        // input text
        $result_markup .= $this->text;

        return $result_markup;
    }

}