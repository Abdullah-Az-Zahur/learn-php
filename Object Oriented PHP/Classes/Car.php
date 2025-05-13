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

    public function getCarInfo()
    {
        return "Brand : $this->brand , Color : $this->color ";
    }
}

// $car01 = new Car("Volvo", "red");
// $car02 = new Car("BMW");

// echo $car01->getCarInfo();
// echo "<br>";
// echo $car01->vehicleType;
