<?php
require_once 'Rectangle.php';

class Square extends Rectangle
{
    public function isSquare()
    {
        if ($this->length === $this->width) {
            return true;
        } else {
            return false;
        }
    }
}

$obj = new Square;

$obj->length = 20;
$obj->width = 20;

if ($obj->isSquare()) {
    echo "é um quadrado \n";
} else {
    echo "É um rectangulo \n";
}

echo $obj->getArea();
