<?php

include_once(dirname(__FILE__). '/../animal/Fruits.php');

class Orange extends Fruit
{
    public function howToEat()
    {
        return "Orange could be juiced";
    }
}