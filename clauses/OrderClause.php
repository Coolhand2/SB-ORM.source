<?php

namespace framework\orm\clauses;

use framework\orm\support\SQLRender;

class OrderClause implements Clause, SQLRender
{

    public function __construct($column, $direction = "DESC")
    {
        $this->_columns = array($column);
        $this->_direction = $direction;
    }

    public function addColumns()
    {
        $args = func_get_args();
        if (is_array($args[0])) {
            foreach ($args[0] as $column) {
                $this->_columns[] = $column;
            }
        } else {
            foreach ($args as $column) {
                $this->_columns[] = $column;
            }
        }
    }

    public function addColumn($name)
    {
        $this->_columns[] = $name;
    }

    public function setDirection($direction)
    {
        $this->_direction = $direction;
    }

    public function render()
    {
        $columns = implode("`, `", $this->_columns);
        return "ORDER BY `$columns` $this->_direction ";
    }

}
