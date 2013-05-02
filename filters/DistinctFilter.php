<?php

namespace framework\orm\filters;

use framework\orm\support\SQLRender;

class DistinctFilter implements Filter, SQLRender
{

    public function render()
    {
        return "DISTINCT ";
    }

}
