<?php

namespace Crecket\PHPMarkup;

use Crecket\PHPMarkup\Elements\Table;
use Crecket\PHPMarkup\Elements\Link;
use Crecket\PHPMarkup\Elements\NewLine;
use Crecket\PHPMarkup\Elements\HtmlNewLine;
use Crecket\PHPMarkup\Elements\Text;

class Code
{

    private $Elements;

    private $options = array(
        'html_mode' => false,
        'escape_characters' => false
    );

    public function __construct($options)
    {
        foreach ($options as $optionKey => $option) {
            if (isset($this->options[$optionKey])) {
                $this->options[$optionKey] = $option;
            }
        }
    }

    public function table($columns, $rows)
    {
        $element = new Table($this->options);
        $this->Elements[] = $element->set($columns, $rows);
    }

    public function link($text, $link)
    {
        $element = new Link($this->options);
        $this->Elements[] = $element->set($text, $link);
    }

    public function text($text)
    {
        $element = new Text($this->options);
        $this->Elements[] = $element->set($text);
    }

    public function newLine()
    {
        $this->Elements[] = new NewLine($this->options['html_mode']);
    }

    /**
     * Get the resulting markup code
     *
     * @return string
     */
    public function get()
    {
        $resulting_markup = '';

        foreach ($this->Elements as $element) {
            $resulting_markup .= $element->get_markup();
        }

        return $resulting_markup;
    }
}