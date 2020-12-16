<?php

include_once "point.php";

class MovablePoint extends Point
{
    public $xSpeed;
    public $ySpeed;

    public function __construct($xSpeedParam, $ySpeedParam)
    {
        $this->xSpeed = $xSpeedParam;
        $this->ySpeed = $ySpeedParam;
        parent::__construct($xSpeedParam, $ySpeedParam);
    }

    public function setXSpeed($xSpeedParam)
    {
        $this->xSpeed = $xSpeedParam;
    }

    public function getXSpeed()
    {
        return $this->xSpeed;
    }

    public function setYSpeed($ySpeedParam)
    {
        $this->ySpeed = $ySpeedParam;
    }

    public function getYSpeed()
    {
        return $this->ySpeed;
    }

    public function setSpeed($xSpeedParam, $ySpeedParam)
    {
        $this->xSpeed = $xSpeedParam;
        $this->ySpeed = $ySpeedParam;
    }

    public function getSpeed()
    {
        return [$this->xSpeed, $this->ySpeed];
    }
}
