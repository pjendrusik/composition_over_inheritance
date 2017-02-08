<?php

namespace HellCatIT\Inheritance\Animal;

use HellCatIT\Application\Dog as DogInterface;
use HellCatIT\Inheritance\Animal;

class Dog extends Animal implements DogInterface
{

    public function bark()
    {
        return $this;
    }

}