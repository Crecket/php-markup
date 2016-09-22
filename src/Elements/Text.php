<?php

namespace Crecket\PHPMarkup\Elements;

class Text implements ElementInterface
{

    private $options;

    private $text;

    public function __construct($options)
    {
        $this->options = $options;
    }

    public function set($text)
    {
        $this->text = $text;
        return $this;
    }

    public function get_markup($html_mode = false)
    {
        $result_markup = '';

        // initial new line
        $result_markup .= $this->options['html_mode'] ? "<br>" : "\n\n";

        // input text
        $result_markup .= $this->text;

        return $result_markup;
    }

}