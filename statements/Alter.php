<?php

namespace framework\orm\statements;

use framework\orm\support\SQLRender;
use framework\orm\support\Complex;

class Alter extends Complex implements SQLRender
{

    public function render()
    {
        return "";
    }

}
