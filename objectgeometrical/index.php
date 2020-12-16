<?php
include_once "circle.php"; //hình tròn
include_once "cylinder.php"; //hình trụ
include_once "rectangle.php"; //hình chữ nhật
include_once "square.php"; //hình vuông

$circle = new Circle('Circle 01', 3);
echo 'Circle area: ' . $circle->calculateArea() . '<br />';
echo 'Circle perimeter: ' . $circle->calculatePerimeter() . '<br />';

$cylinder = new Cylinder('Cylinder 01', 3, 4);
echo 'Cylinder area: ' . $cylinder->calculateArea() . '<br />';
echo 'Cylinder perimeter: ' . $cylinder->calculatePerimeter() . '<br />';

$rectangle = new Rectangle('Rectangle 01', 3, 4);
echo 'Rectangle area: ' . $rectangle->calculateArea() . '<br />';
echo 'Rectangle perimeter: ' . $rectangle->calculatePerimeter() . '<br />';

$square = new Square('Square 01', 4, 4, 4);
echo 'Rectangle area: ' . $square->calculateArea() . '<br />';
echo 'Rectangle perimeter: ' . $square->calculatePerimeter() . '<br />';
