<?php
include_once('Circle.php');
include_once('Cylinder.php');
include_once('Rectangle.php');
include_once('Square.php');

//$circle = new Circle('Circle 01', 3);
//echo 'Circle area: ' . $circle->calculateArea() . '<br />';
//echo 'Circle perimeter: ' . $circle->calculatePerimeter() . '<br />';
//
//$cylinder = new Cylinder('Cylinder 01', 3 , 4);
//echo 'Cylinder area: ' . $cylinder->calculateArea() . '<br />';
//echo 'Cylinder perimeter: ' . $cylinder->calculatePerimeter() . '<br />';
//
//$rectangle = new Rectangle('Rectangle 01', 3 , 4);
//echo 'Rectangle area: ' . $rectangle->calculateArea() . '<br />';
//echo 'Rectangle perimeter: ' . $rectangle->calculatePerimeter() . '<br />';
//
//$square = new Square('Square 01', 4);
//echo 'square area: ' . $square->calculateArea() . '<br />';
//echo 'square perimeter: ' . $square->calculatePerimeter() . '<br />';
$shapes = [];
$shapes[1] = new Circle('Hình tròn', 5);
$shapes[2] = new Rectangle('Hình chữ nhật', 10, 5);
$shapes[3] = new Square('Hình vuông', 5);
echo $shapes[1]->show() . " Area :" . $shapes[1]->calculateArea() . "<br>";
echo $shapes[2]->show() . " Area :" . $shapes[2]->calculateArea() . "<br>";
echo $shapes[3]->show() . " Area :" . $shapes[3]->calculateArea() . "<br>";
try {
    $random = random_int(1, 100);
} catch (Exception $e) {
    $e->getMessage();
}
foreach ($shapes as $shape) {
    $shape->resize($random);
    echo $shape->show() . " Area sau khi tăng kích thước lên $random" . "%:" . $shape->calculateArea() . "<br>";
}
