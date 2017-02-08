<?php

namespace HellCatIT\Composition;

use HellCatIT\Application\Dog as DogInterface;
use HellCatIT\Composition\Traits\Barker;
use HellCatIT\Composition\Traits\Pooper;

class Dog implements DogInterface
{

    use Barker, Pooper;

}