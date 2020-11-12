<?php
include_once(dirname(__FILE__). '/../animal/Fruits.php');

class Apple extends Fruit
{
    public function howToEat()
    {
        return "apple could be slided";
    }
}