<?php
include_once "movablePoint.php";
include_once "point.php";

$objPoint = new Point(10, 20);
echo "<pre>";
print_r($objPoint);

$objMovable = new MovablePoint(50, 100);
echo "<pre>";
print_r($objMovable);
