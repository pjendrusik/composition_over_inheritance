<?php

namespace HellCatIT\Composition;

use HellCatIT\Application\MurderRobot as MurderRobotInterface;
use HellCatIT\Composition\Traits\Driver;
use HellCatIT\Composition\Traits\Killer;

class MurderRobot implements MurderRobotInterface
{

    use Driver, Killer;

}