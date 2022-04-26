<?php
require_once 'ThreeDimensionalShape.php';

class Cylinder extends ThreeDimenshionalShape
{
    public function volume(): float{
        return pi() * pow($this->dimensions['radius'], 2) * $this->dimensions['height'];
    }
}