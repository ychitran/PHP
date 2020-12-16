<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $arr1 = [1, 2, 3, 4, 5, 6];
    $arr2 = [7, 8, 9, 100, 1000];
    $arr3 = [];
    for ($i = 0; $i < count($arr1); $i++) {
        array_push($arr3, $arr1[$i]);
    }
    for ($j = 0; $j < count($arr2); $j++) {
        array_push($arr3, $arr2[$j]);
    }
    echo "<pre>";
    var_dump($arr3);
    ?>

</body>

</html>