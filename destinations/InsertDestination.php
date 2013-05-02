<?php

namespace framework\orm\destinations;

use framework\orm\support\SQLRender;

class InsertDestination implements Destination, SQLRender
{

    private $_table;

    public function __construct($table)
    {
        $this->_table = $table;
    }

    public function render()
    {
        return "INTO `" . $this->_table . "` ";
    }

    public function parameters()
    {
        return array();
    }

}
