<?php

include_once('ComparableCircle.php');

$circleOne = new ComparableCircle('circleOne', 2);
$circleTwo = new ComparableCircle('circleTwo', 8);
echo $circleOne->compareTo($circleTwo).'<br><br>';
var_dump($circleOne->compareTo($circleTwo));
