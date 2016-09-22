<?php

namespace Crecket\PHPMarkup\Elements;

class Table implements ElementInterface
{

    private $options;

    private $columns;
    private $rows;

    public function __construct($options)
    {
        $this->options = $options;
    }

    public function set($columns, $rows)
    {
        $this->columns = $columns;
        $this->rows = $rows;
        return $this;
    }

    public function get_markup($html_mode = false)
    {
        $result_markup = '';

        // initial new line
        $result_markup .= $this->options['html_mode'] ? "<br>" : "\n";

        // create the top columns names
        $result_markup .= implode('|', $this->columns);

        // newline before header underline
        $result_markup .= $this->options['html_mode'] ? "<br>" : "\n";

        // header underline
        $result_markup .= implode('|', array_fill(0, count($this->columns), '---'));


        foreach ($this->rows as $row) {
            // new line for every row
            $result_markup .= $this->options['html_mode'] ? "<br>" : "\n";
            $result_markup .= implode('|', $row);
        }

        return $result_markup;
    }

}