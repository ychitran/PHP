<?php

class findMin
{
    public $arr = [];



    public function __construct()
    {
    }

    public function createArr()
    {
        return $this->arr = range(3, 10, 1);
    }

    public function minValue($min)
    {
        if ($min < count($this->arr)) {
            for ($i = 0; $i < count($this->arr); $i++) {
                if ($this->arr[$i] < $this->arr[$min]) {
                    $this->arr[$min] = $this->arr[$i];
                }
            }
            return "Số nhỏ nhất trong mảng là " . $this->arr[$min];
        } else {
            return "Số bạn nhập vượt quá số phần tử trong mảng";
        }
    }
}
$objfindMin = new findMin;
echo "<pre>";
print_r($objfindMin->createArr());
echo  $objfindMin->minValue(5);
