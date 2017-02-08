<?php

namespace HellCatIT\Inheritance\Robot;

use \HellCatIT\Application\CleaningRobot as CleaningRobotInterface;
use HellCatIT\Inheritance\Robot;

class Cleaning extends Robot implements CleaningRobotInterface
{

    public function clean()
    {
        return $this;
    }

}