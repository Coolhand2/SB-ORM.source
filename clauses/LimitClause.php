<?php

namespace framework\orm\clauses;

use framework\orm\support\SQLRender;

class LimitClause implements Clause, SQLRender
{

    public function __construct()
    {
        $args = func_get_args();
        if (count($args) === 1) {
            $this->_offset = 0;
            $this->_limit  = $args[0];
        } else {
            $this->_offset = $args[0];
            $this->_limit  = $args[1];
        }
    }

    public function render()
    {
        return "LIMIT $this->_offset, $this->_limit ";
    }

}
