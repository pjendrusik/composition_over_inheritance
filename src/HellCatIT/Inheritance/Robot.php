<?php

namespace HellCatIT\Inheritance;

abstract class Robot
{
    private $position = 0;
    private $speed = 1;

    public function drive()
    {
        $this->position = $this->position + $this->speed;
        return $this;
    }

}