<?php

require_once "vendor/autoload.php";

use \HellCatIT\Inheritance\Animal\Dog;
use \HellCatIT\Inheritance\Animal\Cat;
use \HellCatIT\Inheritance\Robot\Cleaning;
use \HellCatIT\Inheritance\Robot\Murder;
use \HellCatIT\Inheritance\Robot\MurderDog;

(new Dog())->poop()->bark();
(new Cat())->poop()->meow();

(new Cleaning())->drive()->clean();
(new Murder())->drive()->kill();

(new MurderDog())->drive()->bark()->kill();