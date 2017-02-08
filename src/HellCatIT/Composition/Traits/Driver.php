<?php

namespace HellCatIT\Composition\Traits;

trait Driver
{
    private $position = 0;
    private $speed = 1;

    public function drive()
    {
        $this->position = $this->position + $this->speed;
        return $this;
    }
}