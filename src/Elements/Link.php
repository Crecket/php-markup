<?php

namespace Crecket\PHPMarkup\Elements;

use Crecket\PHPMarkup\Format\Escaped;

class Link implements ElementInterface
{

    private $options;

    private $text;
    private $link;

    public function __construct($options)
    {
        $this->options = $options;
    }

    public function set($text, $link)
    {
        $this->text = $text;
        $this->link = $link;
        return $this;
    }

    public function get_markup()
    {
        if ($this->options['escape_characters']) {
            $this->text = Escaped::get($this->text);
            $this->link = Escaped::get($this->link);
        }
        return '[' . $this->text . '](' . $this->link . ')';
    }
}