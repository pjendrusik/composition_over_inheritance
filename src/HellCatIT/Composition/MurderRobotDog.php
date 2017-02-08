<?php

namespace HellCatIT\Composition;

use HellCatIT\Application\MurderRobotDog as MurderRobotDogInterface;
use HellCatIT\Composition\Traits\Barker;
use HellCatIT\Composition\Traits\Driver;
use HellCatIT\Composition\Traits\Killer;

class MurderRobotDog implements MurderRobotDogInterface
{

    use Driver, Killer, Barker;

    public function kill()
    {
        Killer::kill();

        $this->drive();
        
        return $this;
    }

}