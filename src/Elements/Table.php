<?php

namespace Crecket\PHPMarkup\Elements;

class Table
{

    private $columns;
    private $rows;

    /**
     * Table constructor.
     */
    public function __construct()
    {
    }

    /**
     * @param $columns
     * @param $rows
     * @return $this
     */
    public function set($columns, $rows)
    {
        $this->columns = $columns;
        $this->rows = $rows;
        return $this;
    }

    /**
     * @return string
     */
    public function get_markup()
    {
        $result_markup = '';

        // initial new line
        $result_markup .= "\n";

        // create the top columns names
        $result_markup .= implode('|', $this->columns);

        // newline before header underline
        $result_markup .= "\n";

        // header underline
        $result_markup .= implode('|', array_fill(0, count($this->columns), '---'));

        // loop through rows
        foreach ($this->rows as $row) {
            // new line for every row
            $result_markup .= "\n";
            $result_markup .= implode('|', $row);
        }

        return $result_markup;
    }

}