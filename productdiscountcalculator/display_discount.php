<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $price = $_POST["price"];
    $discount = $_POST["discount"] / 100;
    $discount_amount = $price * $discount * 0.1;
    $discount_price = $price - $discount_amount;
}
echo  "<h2>Product Discount Calculator</h2>";
echo "Mô tả sản phẩm" . " $name. ";
echo "Giá niêm yết của sản phẩm" . " $price. ";
echo "Tỷ lệ chiết khấu phần trăm" . " $discount. ";
echo "Lượng chiết khấu" . " $discount_amount. ";
echo "Giá sau khi chiết khấu" . " $discount_price. ";
