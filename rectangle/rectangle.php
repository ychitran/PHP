<?php
class Rectangle
{
    public $width;
    public $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }
    //Tinh Dien Tich
    public function getArea()
    {
        return $this->width * $this->height;
    }
    //Tinh chu vi
    public function getPerimeter()
    {
        return (($this->width + $this->height) * 2);
    }
    public function display()
    {
        return "Rectangle{" . "width=" . $this->width . ", height=" . $this->height . "}";
    }
}
