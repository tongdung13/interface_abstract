<?php

include "CircleComparator.php";

$circleOne = new Circle(9, "circleOne");
$circleTow = new Circle(9,"circleTow");
$circleComparator = new CircleComparator();

var_dump($circleComparator->compare($circleOne, $circleTow));
//
//$test = $circleOne->compare($circleTow);
//echo ('Comparator: <br>');
//echo $test;