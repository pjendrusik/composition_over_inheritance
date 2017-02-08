<?php

require_once "vendor/autoload.php";

use \HellCatIT\Inheritance\Animal\Dog;
use \HellCatIT\Inheritance\Animal\Cat;
use \HellCatIT\Inheritance\Robot\Cleaning as CleaningRobot;
use \HellCatIT\Inheritance\Robot\Murder as MurderRobot;
use \HellCatIT\Inheritance\Robot\MurderDog as MurderRobotDog;

(new Dog())->poop()->bark();
(new Cat())->poop()->meow();

(new CleaningRobot())->drive()->clean();
(new MurderRobot())->drive()->kill();

(new MurderRobotDog())->drive()->bark()->kill();