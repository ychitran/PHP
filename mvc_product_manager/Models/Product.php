<?php
//Tạo dữ liệu của sản phẩm
namespace Models;

class Product
{
    public $id;
    public $name;
    public $price;
    public $description;
    public $producer;

    public function __construct($name, $price, $description, $producer)
    {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->producer = $producer;
    }
}
