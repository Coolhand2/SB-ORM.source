<?php

namespace framework\orm\sources;

use framework\orm\support\SQLRender;

class TableSource implements Source, SQLRender
{

    private $_table;

    public function __construct($table)
    {
        $this->_table = $table;
    }

    public function getTableName()
    {
        return $this->_table;
    }

    public function render()
    {
        return "FROM `" . $this->_table . "` ";
    }

}
