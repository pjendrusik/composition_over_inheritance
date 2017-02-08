<?php

namespace HellCatIT\Composition;

use \HellCatIT\Application\Cat as CatInterface;
use HellCatIT\Composition\Traits\Meower;
use HellCatIT\Composition\Traits\Pooper;

class Cat implements CatInterface
{

    use Meower, Pooper;

}