<?php

/* 
Lấy dữ liệu trong ô 
*/

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $show = $_POST["show"];


    /*
Hiển thị hình
*/
    class Geometry
    {
        public function __construct()
        {
        }

        public function rectangle()
        {
            for ($i = 1; $i < 4; $i++) {
                for ($j = 1; $j < 10; $j++) {
                    echo "*";
                }
                echo "<br>";
            }
        }

        public function squareTriangle()
        {

            for ($i = 1; $i < 7; $i++) {
                for ($j = 1; $j < $i; $j++) {
                    echo "*";
                }
                echo "<br>";
            }
        }

        public function isoscelesTriangle()
        {
            for ($i = 6; $i > 0; $i--) {
                for ($j = 1; $j < $i; $j++) {
                    echo "*";
                }
                echo "<br>";
            }
        }
    }


    $objGeometry = new Geometry;
    switch ($show) {
        case "rectangle":
            echo $objGeometry->rectangle();
            break;
        case "squareTriangle":
            echo $objGeometry->squareTriangle();
        case "isoscelesTriangle":
            echo $objGeometry->isoscelesTriangle();
    }
}
