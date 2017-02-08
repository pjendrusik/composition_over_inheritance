<?php

namespace HellCatIT\Composition;

use \HellCatIT\Application\CleaningRobot as CleaningRobotInterface;
use HellCatIT\Composition\Traits\Cleaner;
use HellCatIT\Composition\Traits\Driver;

class CleaningRobot implements CleaningRobotInterface
{

    use Driver, Cleaner;

}