<?php

include_once('Shape.php');
include_once('Resizeable.php');

class Rectangle extends Shape implements Resizeable
{
    public $width;
    public $height;

    public function __construct($name, $width, $height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea()
    {
        return $this->height * $this->width;
    }

    public function calculatePerimeter()
    {
        return ($this->height + $this->width) * 2;
    }
    public function resize($random)
    {
        $this->width = $this->width + ($this->width * $random / 100);
    }


    public function getWidth()
    {
        return $this->width;
    }


    public function getHeight()
    {
        return $this->height;
    }
}
