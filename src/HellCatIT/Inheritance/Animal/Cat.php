<?php

namespace HellCatIT\Inheritance\Animal;

use \HellCatIT\Application\Cat as CatInterface;
use HellCatIT\Inheritance\Animal;

class Cat extends Animal implements CatInterface
{

    public function meow()
    {
        return $this;
    }

}