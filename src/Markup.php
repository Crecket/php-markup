<?php

namespace Crecket\PHPMarkup;

use Crecket\PHPMarkup\Elements\Table;
use Crecket\PHPMarkup\Elements\Link;
use Crecket\PHPMarkup\Elements\NewLine;
use Crecket\PHPMarkup\Elements\HtmlNewLine;
use Crecket\PHPMarkup\Elements\Line;

class Markup
{

    private $Elements;

    /**
     * Code constructor.
     */
    public function __construct()
    {

    }

    /**
     * @param $columns
     * @param $rows
     */
    public function table($columns, $rows)
    {
        $element = new Table();
        $this->Elements[] = $element->set($columns, $rows);
    }

    /**
     * @param $text
     * @param $link
     */
    public function link($text, $link)
    {
        $element = new Link();
        $this->Elements[] = $element->set($text, $link);
    }

    /**
     * @param $text
     * @param $newline
     */
    public function line($text, $newline = false)
    {
        $element = new Line($newline);
        $this->Elements[] = $element->set($text);
    }

    /**
     *
     */
    public function newLine()
    {
        $this->Elements[] = new NewLine();
    }

    /**
     * Get the resulting markup code
     *
     * @return string
     */
    public function get()
    {
        $resulting_markup = '';

        // loop through elements and get markup code
        foreach ($this->Elements as $element) {
            $resulting_markup .= $element->get_markup();
        }

        return $resulting_markup;
    }
}