<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hiển thị thời gian hiện tại</title>
</head>

<body>

    <h1>Bây giờ là
        <?php
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        echo date('Y-M-d h:m:s'); ?>
    </h1>


</body>

</html>