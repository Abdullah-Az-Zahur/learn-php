<?php

class Car
{
    private $brand;
    private $color;
    public $vehicleType = 'car';

    // constructor   
    public function __construct($brand, $color = "none")
    {
        $this->brand = $brand;
        $this->color = $color;
    }
}

$car01 = new Car("Volvo", "red");
$car02 = new Car("BMW", "blue");
$car03 = new Car("Mercedes");
$car04 = new Car("Audi", "green");

echo $car01->vehicleType;
