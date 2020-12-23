<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $min_value = 1;
        $max_value = 100;
        $current_value = null;
        $selection = null;

        if($_SERVER["REQUEST_METHOD"] == "GET") {
            $min_value = 1;
            $max_value = 100;
        }

        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $selection = $_POST["selection"];

            switch($selection) {
                case "correct":
                    header("location:./guess_number_end_game.php?ketqua=".$_POST["current_value"]);

                    break;

                case "smaller":
                    $max_value = $_POST["current_value"] - 1;
                    $min_value = $_POST["min_value"];
                    break;

                case "bigger":
                    $min_value = $_POST["current_value"] + 1;
                    $max_value = $_POST["max_value"];
                    break;
            }

            if($min_value == $max_value) {
                header("location:./guess_number_end_game.php?ketqua=".$max_value);
            }
        }

        $current_value = rand($min_value, $max_value);
    ?>
    <form method="POST">
        <h3>Đây có phải là số mà bạn đoán: <?php echo($current_value) ?></h3>

        <div style="display: none">
            <input name="current_value" value="<?php echo($current_value) ?>"/>
            <input name="min_value" value="<?php echo($min_value) ?>"/>
            <input name="max_value" value="<?php echo($max_value) ?>"/>
        </div>

        <div>
            <span>
                <input type="radio" id="correct" checked name="selection" value="correct">
                <label for="correct">Đúng</label><br>
            </span>

            <span style="display: <?php echo($current_value == $min_value ? "none" : "block") ?>">
                <input type="radio" id="smaller" name="selection" value="smaller">
                <label for="smaller">Nhỏ hơn</label><br>
            </span>

            <span style="display: <?php echo($current_value == $max_value ? "none" : "block") ?>">
                <input type="radio" id="bigger" name="selection" value="bigger">
                <label for="bigger">Lớn hơn</label>
            </span>
        </div>

        <button>Submit</button>
    </form>
</body>
</html>