<?php
include_once "circle.php";

class Cylinder extends Circle
{
    public $height;

    public function __construct($name, $radius, $color, $height)
    {
        parent::__construct($name, $radius, $color);
        $this->height = $height;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function getPerimeter()
    {
        return parent::getPerimeter() * $this->height;
    }

    public function getArea()
    {
        return parent::getArea() * 2 + parent::getPerimeter() * $this->height;
    }

    public function __toString()
    {
        return '<h3>Cylinder Name: ' . $this->getName() . '</h3>Radius: ' . $this->getRadius() . '<br>Color: ' . $this->getColor() . '<br>Height: ' . $this->getHeight()
            . "<br>Diện tích: " . $this->getArea() . '<br>Chu vi: ' . $this->getPerimeter();
    }
}
