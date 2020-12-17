<?php

class Queue
{
    public $queue;
    public $limit;

    //Khởi tạo Queue
    public function __construct($limit)
    {
        $this->queue = [];
        $this->limit = $limit;
    }

    //Thêm một phần tử vào mảng trong hàng đợi

    public function enqueue($item)
    {
        if ($this->isFull()) {
            throw new Exception("Queue is Full, Can't add Item");
        } else {
            return $this->queue[] = $item;
        }
    }

    //Xoá một phần tử từ hàng đợi

    public function dequeue()
    {
        if ($this->isEmpty()) {
            throw new Exception("Queue is Empty, Can't delete item");
        } else {
            return array_shift($this->queue);
        }
    }

    //Kiểm tra xem mảng Queue có rỗng hay không

    public function isEmpty()
    {
        if (count($this->queue) == 0) {
            return true;
        } else {
            return false;
        }
    }

    //Lấy phần tử ở đầu hàng đợi

    public function peek()
    {
        if ($this->isEmpty()) {
            throw new Exception("Queue is Empty, Can't delete item");
        } else {
            return current($this->queue);
        }
    }



    //Kiểm tra mảng Queue có full hay không
    public function isFull()
    {
        if (count($this->queue) == $this->limit) {
            return true;
        } else {
            return false;
        }
    }
}

$objQueue = new Queue(3);
try {
    $objQueue->enqueue("YChi");
    $objQueue->enqueue("Vu");
    $objQueue->enqueue("Trinh");
    $objQueue->dequeue();
    $objQueue->peek();
    echo "<pre>";
    print_r($objQueue);
    echo $objQueue->peek();
} catch (Exception $e) {
    echo $e->getMessage();
}
