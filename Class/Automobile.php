<?php

class Automobile
{
    public $fuel;
    protected $engine;
    private $transmission;

    // public function setEngine($value)
    // {
    //     $this->engine = $value;
    // }

    // public function getEngine()
    // {
    //     return $this->engine;
    // }
}

class Car extends Automobile
{
    public function __construct()
    {
        echo 'The class "' . __CLASS__ . '" was initied !!'. "\n";
    }

    public function setEngine($value)
    {
        $this->engine = $value;
    }

    public function getEngine()
    {
        return $this->engine;
    }
}

// Create an object from Automobile class
$automobile = new Automobile();

// Attempt to set $automobile object properties
// $automobile->fuel = "Petroleo";
// echo $automobile->fuel . "\n";

// $automobile->setEngine("1500 cc");
// echo $automobile->getEngine() . "\n";

// $automobile->transmission = "Manual";
// echo $automobile->transmission . "\n\n";

$car = new Car;

// Attempt to set $automobile object properties
$car->fuel = "Petroleo";
echo $car->fuel . "\n";

$car->setEngine("1500 cc");
echo $car->getEngine() . "\n";

$car->transmission = "Manual";
echo $car->transmission . "\n";


