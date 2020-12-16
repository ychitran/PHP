<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Hiển thị thông báo nếu người dùng nhập số bất hợp lệ</h2>
    <form action="cal.php" method="POST">
        <input type="text" name="input1" placeholder="Nhập vào số x">
        <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="text" name="input2" placeholder="Nhập vào số y">
        <input type="submit" name="submit" value="Kết quả">
    </form>
</body>

</html>