<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input1 = $_POST["input1"];
    $input2 = $_POST["input2"];
    $operator = $_POST["operator"];
    switch ($operator) {
        case "+":
            $result = $input1 + $input2;
            break;
        case "-":
            $result = $input1 - $input2;
            break;
        case "*":
            $result = $input1 * $input2;
            break;
        case "/":
            try {
                if ($input1 = $input2 == 0 || $input2 == 0) {
                    throw new Exception('Vui lòng nhập số khác 0');
                }
            } catch (Exception $e) {
                echo $e->getMessage();
            }
    }
}
if (!empty($result)) {
    echo $input1 . " " . $operator . " " . $input2 . " = " . $result;
}
