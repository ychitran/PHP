<?php

class BubbleSort
{
    public $arr = [];

    public function __construct()
    {
        $this->arr = [2, 3, 2, 5, 6, 1, -2, 3, 14, 12];
    }

    public function bubbleSort()
    {
        for ($step = 1; $step <= count($this->arr) - 1; $step++) {
            for ($i = 0; $i < count($this->arr) - 1; $i++) {
                if ($this->arr[$i] > $this->arr[$i + 1]) {
                    $temp = $this->arr[$i + 1];
                    $this->arr[$i + 1] = $this->arr[$i];
                    $this->arr[$i] = $temp;
                }
            }
        }

        return $this->arr;
    }
}

$objBubbleSort = new BubbleSort;
echo "<pre>";
print_r($objBubbleSort->bubbleSort());
