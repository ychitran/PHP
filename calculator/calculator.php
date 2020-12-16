<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstOperand   = $_POST["firstOperand"];
    $operator       = $_POST["operator"];
    $secondOperand  = $_POST["secondOperand"];

    switch ($operator) {
        case "+":
            $result = $firstOperand + $secondOperand;
            break;
        case "-":
            $result = $firstOperand - $secondOperand;
            break;
        case "*":
            $result = $firstOperand * $secondOperand;
            break;
        case "/":
            try {
                if ($secondOperand == 0) {;
                    throw new Exception('Vui lòng nhập số khác 0');
                }
                $result = $firstOperand / $secondOperand;
            } catch (Exception $e) {
                echo $e->getMessage();
            }
    }
}
if (isset($result)) {
    echo $firstOperand . " " . $operator . " " . $secondOperand . " = " . $result;
}
