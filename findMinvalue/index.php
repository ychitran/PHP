<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //Cách 1
    function minArray($arr)
    {
        $min = $arr[0];
        for ($i = 1; $i < count($arr); $i++) {
            if ($arr[$i] < $min) {
                $min = $arr[$i];
            }
        }
        return $min;
    }
    $arr = [1, 15, 18, -50, -45, 78, 90, -600, -500, -1000, -2000];
    echo (minArray($arr));
    ?>



    <?php
    //Cách 2
    function minArray2($arr)
    {
        $min = $arr[2]; //18

        foreach ($arr as $value) {
            if ($min > $value) {

                $min = $value;
            }
        }

        return $min;
    }
    echo (minArray2($arr));
    ?>

</body>

</html>