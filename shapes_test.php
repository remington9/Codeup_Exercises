<?php

require_once 'Rectangle.php';
require_once 'Square.php';

$rectangle = new Rectangle(9,3);
$square = new Square(3);

echo $rectangle->area() . PHP_EOL;
echo $square->perimeter() . PHP_EOL;