<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $present = $_POST["present"];
    $rate = $_POST["rate"] / 100;
    $years = $_POST["years"];
}

function calculator($present, $rate, $years)
{
    if ($present <= 0 || $rate <= 0 || $years <= 0) {
        echo "Vui lòng nhập lại giá trị lớn hơn 0";
    } else {
        for ($i = 1; $i <= $years; $i++) {
            $future = $present + ($present * $rate);
            $present = $future;
        }
    }
    echo  "Số tiền bạn có là" . " " . $future;
}
calculator($present, $rate, $years);
