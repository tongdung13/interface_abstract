<?php

include_once('Circle.php');
include_once('Retangle.php');
include_once('Square.php');


$circle = new Circle('Circle', 4);
$doublePcent = Rand(1,100);
echo "Circle: " . $circle->resize($doublePcent). '<br><br>';


$rectangle = new  Rectangle("Rectangle" , 5, 9);
echo "Rectangle: " . $rectangle->resize($doublePcent). '<br><br>';

$square = new Square("Square", 7);
echo "Square: " . $square->resize($doublePcent);