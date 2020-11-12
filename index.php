<?php

include_once('animals/chicken.php');
include_once('animals/Tiger.php');
include_once('comparable/Apple.php');
include_once('comparable/Orange.php');

echo ('____ Animals<br>');

$animals[0] = new Tiger();
$animals[1] = new Chicken();

foreach($animals as $animal) {
    echo $animal->makeSound(). '<br><br>';

    if ($animal instanceof Chicken) {
        echo $animal->howToEat(). '<br><br>';
    }
}

echo ('____ Fruits<br>');

$fruits[0] = new Apple();
$fruits[1] = new Orange();

foreach($fruits as $fruit){
    echo $fruit->howToEat() .'<br><br>';
}