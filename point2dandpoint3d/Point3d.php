<?php
include_once "Point2d.php";

class Point3d extends Point2d
{
    public $z;

    public function __construct($x, $y, $z)
    {
        $this->z = $z;
        parent::__construct($x, $y);
    }

    public function setZ($z)
    {
        $this->z = $z;
    }

    public function getZ()
    {
        return $this->z;
    }

    public function setXYZ($x, $y, $z)
    {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }

    public function getXYZ()
    {
        return [$this->x, $this->y, $this->z];
    }

    public function __toString()
    {
        return $this->x . $this->y . $this->z;
    }
}
