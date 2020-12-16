<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <h1>Simple Calculator</h1>
    <form action="calculator.php" method="POST">
        <div class="first">
            <label>First operand:</label>
            <input type="text" name="firstOperand">
        </div>
        <div class="second">
            <label>Operator</label>
            <select name="operator">
                <option value="+">Addition</option>
                <option value="-">Subtraction</option>
                <option value="*">Multiplication</option>
                <option value="/">Division</option>
            </select>
        </div>
        <div class="third">
            <label>Second operand:</label>
            <input type="text" name="secondOperand"></br>
        </div>
        <div class="fourth">
            <input type="submit" value="Calculator">
        </div>
    </form>


</body>

</html>