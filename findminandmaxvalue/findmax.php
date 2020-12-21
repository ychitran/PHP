<?php

class findMax
{
    public $arr = [];



    public function __construct()
    {
    }

    public function createArr()
    {
        return $this->arr = range(1, 20, 1);
    }

    public function minValue($max)
    {
        if ($max < count($this->arr)) {
            for ($i = 0; $i < count($this->arr); $i++) {
                if ($this->arr[$i] > $this->arr[$max]) {
                    $this->arr[$max] = $this->arr[$i];
                }
            }
            return "Số lớn nhất trong mảng là " . $this->arr[$max];
        } else {
            return "Số bạn nhập vượt quá số phần tử trong mảng";
        }
    }
}
$objfindMin = new findMax;
echo "<pre>";
print_r($objfindMin->createArr());
echo  $objfindMin->minValue(6);
