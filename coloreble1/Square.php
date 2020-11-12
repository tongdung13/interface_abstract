<?php

include_once('Colorable.php');

class Square implements Colorable
{
    public $name;
    public $width;

    public function __construct($name, $width)
    {
        $this->name = $name;
        $this->width = $width;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function setWidth($width)
    {
        $this->width = $width;
    }

    public function getArea(){
        return $this->width * $this->width;
    }

    public function howToColor()
    {

    }
}