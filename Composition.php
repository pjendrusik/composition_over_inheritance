<?php

require_once "vendor/autoload.php";

use \HellCatIT\Composition\Dog;
use \HellCatIT\Composition\Cat;
use \HellCatIT\Composition\CleaningRobot;
use \HellCatIT\Composition\MurderRobot;
use \HellCatIT\Composition\MurderRobotDog;

(new Dog())->poop()->bark();
(new Cat())->poop()->meow();

(new CleaningRobot())->drive()->clean();
(new MurderRobot())->drive()->kill();

(new MurderRobotDog())->drive()->bark()->kill();