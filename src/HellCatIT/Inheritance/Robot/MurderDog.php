<?php

namespace HellCatIT\Inheritance\Robot;

use HellCatIT\Application\MurderRobotDog as MurderRobotDogInterface;

class MurderDog extends Murder implements MurderRobotDogInterface
{

    public function bark()
    {
        // duplicated functionality from Animal\Dog::class
        return $this;
    }

    public function kill()
    {
        parent::kill();

        $this->drive();

        return $this;
    }

}