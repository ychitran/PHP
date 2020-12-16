<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    input {
        padding: 5px;
        margin-right: 10px;
        border: 2px solid green;



    }
</style>

<body>
    <h2>Product Discount Calculator</h2>
    <form action="display_discount.php" method="POST">
        <input type="text" name="name" placeholder="Product Description">
        <input type="text" name="price" placeholder="List Price">
        <input type="text" name="discount" placeholder="Discount Percent">
        <input type="submit" id="result" value="Calculate Discount">
    </form>
</body>

</html>