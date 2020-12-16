<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    function maxValue($arr)
    {
        $max = $arr[0][0];
        for ($i = 0; $i < count($arr); $i++) {
            for ($j = 0; $j < count($arr[$i]); $j++) {
                if ($arr[$i][$j] > $max) {
                    $max = $arr[$i][$j];
                }
            }
        }
        return $max;
    }


    $arr = [
        [12, 52, 87, 47, -50],
        [50, 47, 58, 2, 7, 45, 100, 999],
        [-500, -1000, 100, 500]
    ];
    echo (maxValue($arr));
    ?>

</body>

</html>