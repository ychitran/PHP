<?php

class FindNumber
{
    public $arr = [];


    public function __construct()
    {
    }

    public function addArr()
    {
        return $this->arr = [1, 2, 4, 2, 8, 5, 4, 2, 2];
    }


    public function findNumber($number)
    {
        $count = 0;
        for ($i = 0; $i < count($this->arr); $i++) {
            if ($this->arr[$i] == $number) {
                $count++;
            }
        }
        return "Số phần tử lặp lại là " . $count;
    }
}



$objFindNumber = new FindNumber;
echo "<pre>";
print_r($objFindNumber->addArr());
echo $objFindNumber->findNumber(2);
