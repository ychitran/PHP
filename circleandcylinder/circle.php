<?php

class Circle
{
    public $name;
    public $radius;
    public $color;


    public function __construct($name, $radius, $color)
    {
        $this->name = $name;
        $this->radius = $radius;
        $this->color = $color;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    public function getRadius()
    {
        return $this->radius;
    }
    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function getPerimeter()
    {
        return pi() * $this->radius * 2;
    }
    public function getArea()
    {
        return pi() * pow($this->radius, 2);
    }

    public function __toString()
    {
        return "<h3>Circle name: " . $this->getName() . "</h3>Radius: " . $this->getRadius() .
            "<br> Color: " . $this->getColor() . "<br>Tính diện tích: " . $this->getArea() . "<br> Tính chu vi: " . $this->getPerimeter() . "<br>";
    }
}
