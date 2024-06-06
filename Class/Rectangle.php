<?php

class Rectangle
{
    public $length = 0;
    public $width = 0;

    public function getPerimeter()
    {
        return (2 * ($this->length + $this->width));
    }

    public function getArea()
    {
        return $this->length * $this->width;
    }
}

$rectangle = new Rectangle();

// Get the object properties values
echo $rectangle->length . "\n"; // 0utput: 0
echo $rectangle->width . "\n"; // 0utput: 0
 
// Set object properties values
$rectangle->length = 30;
$rectangle->width = 20;

echo $rectangle->getPerimeter();
echo "\n";
echo $rectangle->getArea() . "\n";