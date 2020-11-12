<?php

include_once(dirname(__FILE__). '/../animal/Animal.php');
include_once(dirname(__FILE__). '/../coloreble/Edible.php');
class Chicken extends Animal implements Edible
{
    public function makeSound()
    {
        return " Chicken: ò-ó-o";
    }

    public function howToEat()
    {
        return "could be fried";
        // TODO: Implement howToEat() method.
    }
}