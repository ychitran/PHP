<?php

class FindMin
{
    public $size = [];

    public function __construct()
    {
        $this->size = range(1, 10, 1);
    }

    public function findMin()
    {
        $min = $this->size[0];
        for ($i = 1; $i < count($this->size); $i++) {
            if ($this->size[$i] < $min) {
                $min = $this->size[$i];
            }
        }
        return "Số nhỏ nhất trong mảng là " . $min;
    }
}

$objFindMin = new FindMin;
echo "<pre>";
print_r($objFindMin->findMin());
