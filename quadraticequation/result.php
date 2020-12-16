<?php

include "quadraticEquation.php";

if ($_SERVER = ["REQUEST_METHOD"] == "POST"); {
    $a = $_POST["numbera"];
    $b = $_POST["numberb"];
    $c = $_POST["numberc"];
    $equation = new QuadraticEquation($a, $b, $c);
    $root1 = NULL;
    $root2 = NULL;
}

if ($equation->getDiscriminant() > 0) {
    $root1 = $equation->getRoot1();
    $root2 = $equation->getRoot2();
    echo "Phương trình có 2 nghiệm, nghiệm 1 là " . $root1;
    echo "</br>";
    echo "Phương trình có nghiệm 2 là " . $root2;
} else if ($equation->getDiscriminant() == 0) {
    $root1 = $root2 = $equation->getRoot();
    echo "Phương trình có 1 nghiệm duy nhất là " . $root1;
} else {
    echo "Phương trình vô nghiệm";
}
