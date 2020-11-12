<?php

include_once('Resizeable.php');

class Square implements Resizeable
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

    public function getArea()
    {
        return $this->width * $this->width;
    }

    public function resize($doublePcent)
    {
        return $this->getArea() + ($this->getArea() * $doublePcent) / 100;
    }
}

