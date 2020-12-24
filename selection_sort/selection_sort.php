
<?php
$arr = [12, 43, 2, 4, 5, 56, 23];

for ($index = 0; $index <= count($arr) - 2; $index++) {
    $min = $arr[$index];
    $indexMin = $index;
    for ($i = $index; $i <= count($arr) - 1; $i++) {
        if ($arr[$i] < $min) {
            $min = $arr[$i];
            $indexMin = $i;
        }
    }
    $temp = $arr[$index];
    $arr[$index] = $arr[$indexMin];
    $arr[$indexMin] = $temp;
}
echo '<pre>';
print_r($arr);
