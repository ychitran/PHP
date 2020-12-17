<?php
class Stack
{
    public $stack;
    public $limit;

    //Khởi tạo hàm
    public function __construct($limit)
    {
        $this->limit = $limit;
        $this->stack = [];
    }

    //Thêm một phần tử trên ngăn sắp xếp
    public function push($item)
    {
        if ($this->isFull()) {
            throw new Exception("Stack is full. Can't push item");
        } else {
            array_unshift($this->stack, $item);
        }
    }
    //Xoá một phần tử từ ngăn xếp

    public function pop()
    {
        if ($this->isEmpty()) {
            throw new Exception("Stack is empty. Can't delete item");
        } else {
            array_shift($this->stack);
        }
    }

    //Lấy dữ liệu trên cùng của ngăn xếp mà không xoá phần tử này

    public function peek()
    {
        if ($this->isEmpty()) {
            throw new Exception("Stack is empty. Can't get data item");
        } else {
            return current($this->stack);
        }
    }




    //Kiểm tra xem mảng Stack có rỗng hay không 
    public function isEmpty()
    {
        if (count($this->stack) == 0) {
            return true;
        } else {
            return false;
        }
    }



    //Kiểm tra xem mảng Stack đã Full hay chưa
    public function isFull()
    {
        if (count($this->stack) == $this->limit) {
            return true;
        } else {
            return false;
        }
    }
}

$objStack = new Stack(3);
try {
    $objStack->push("YChi");
    $objStack->push("Trinh");
    $objStack->push("Vu");
    $objStack->pop();
    $objStack->pop();
    $objStack->peek();
    echo "<pre>";
    print_r($objStack);
    echo $objStack->peek();
} catch (Exception $e) {
    echo $e->getMessage();
}
