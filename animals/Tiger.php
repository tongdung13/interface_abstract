<?php

include_once(dirname(__FILE__). '/../animal/Animal.php');

class Tiger extends Animal
{
public function makeSound ()
{
    return "Tiger: geuuuur";
}
}