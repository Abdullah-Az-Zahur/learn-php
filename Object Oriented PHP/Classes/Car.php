<?php

class Car
{
    private $brand;
    private $color;
    private $vehicleType = 'car';

    // constructor   
    public function __construct($brand, $color)
    {
        $this->brand = $brand;
        $this->color = $color;
    }
}

$car01 = new Car();
