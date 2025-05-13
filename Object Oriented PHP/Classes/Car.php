<?php

class Car
{
    private $brand;
    private $color;
    // private $vehicleType = 'car';

    // constructor   
    public function __construct($brand, $color = "none")
    {
        $this->brand = $brand;
        $this->color = $color;
    }

    // Getter and Setter methods
    public function getBrand()
    {
        return $this->brand;
    }

    public function setBrand($brand)
    {
        return $this->brand = $brand;
    }
    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $allowedColors = ['red', 'blue', 'green', 'yellow', 'black', 'white'];
        if (in_array($color, $allowedColors)) {
            $this->color = $color;
        }
    }

    // Method
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
