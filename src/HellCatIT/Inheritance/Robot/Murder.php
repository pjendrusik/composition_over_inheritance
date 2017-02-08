<?php

namespace HellCatIT\Inheritance\Robot;

use HellCatIT\Application\MurderRobot as MurderRobotInterface;
use HellCatIT\Inheritance\Robot;

class Murder extends Robot implements MurderRobotInterface
{

    public function kill()
    {
        return $this;
    }

}