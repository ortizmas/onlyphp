<?php
// Replace Conditional with Polymorphism

// Problema
/*class Bird {

    public function getSpeed() {

        switch ($this->type) {
            case "EUROPEAN":
                return $this->getBaseSpeed();
            case "AFRICAN":
                return $this->getBaseSpeed() - $this->getLoadFactor() * $this->numberOfCoconuts;
            case "NORWEGIAN_BLUE":
                return ($this->isNailed) ? 0 : $this->getBaseSpeed($this->voltage);
        }

        throw new Exception("Should be unreachable");
    }

    public function getBaseSpeed($voltage = 110)
    {
        return $voltage;
    }

    public function getLoadFactor()
    {
        return 5;
    }

}

$bird = new Bird;
$bird->type = "EUROPEAN";
$bird->numberOfCoconuts = 5;
$bird->type = "AFRICAN";
$bird->type = "NORWEGIAN_BLUE";
$bird->isNailed = false;
$bird->voltage = 120;

echo $bird->getSpeed();*/

// Solução refactorando
abstract class Bird
{
    abstract function getSpeed();

    protected function getBaseSpeed($voltage = 110)
    {
        return $voltage;   
    }
}

class European extends Bird
{
    public function getSpeed()
    {
        return $this->getBaseSpeed();
    }
}

class African extends Bird
{
    public function getSpeed()
    {
        return $this->getBaseSpeed() - $this->getLoadFactor() * $this->numberOfCoconuts;
    }

    private function getLoadFactor()
    {
        return 7;
    }
}

class NorwegianBlue extends Bird
{
    public function getSpeed()
    {
        return ($this->isNailed) ? 0 : $this->getBaseSpeed($this->voltage);
    }
}

$bird = new African;
$bird->numberOfCoconuts = 5;
$bird->isNailed = false;
$bird->voltage = 120;

echo $bird->getSpeed();

