<?php

namespace Controller;

use Models\Product;
use Models\ProductDB;
use models\DBConnection;

class ProductController
{

    public $productDB;

    public function __construct()
    {
        $connection = new DBConnection("mysql:host=localhost:3306;dbname=product_manager", "root", "");
        $this->productDB = new ProductDB($connection->connect());
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include 'view/add.php';
        } else {

            $name = $_POST['name'];
            $price = $_POST['price'];
            $description = $_POST['description'];
            $producer = $_POST['producer'];

            $product = new Product($name, $price, $description, $producer);
            $this->productDB->create($product);
            $message = 'Product created';
            include 'view/add.php';
        }
    }
    //Gọi đến hàm GetAll và trả về list.php
    public function index()
    {
        $products = $this->productDB->getAll();
        include 'view/list.php';
    }

    //Xoá một khách hàng
    public function delete()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $product = $this->productDB->get($id);
            include 'view/delete.php';
        } else {
            $id = $_POST['id'];
            $this->productDB->delete($id);
            header('Location: index.php');
        }
    }

    //Update một khách hàng

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $product = $this->productDB->get($id);
            include 'view/edit.php';
        } else {
            $id = $_POST['id'];
            $customer = new Product($_POST['name'], $_POST['price'], $_POST['description'], $_POST['producer']);
            $this->productDB->update($id, $product);
            header('Location: index.php');
        }
    }

    //Search một khách hàng

    public function search()
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $search =  $_POST['search'];

            $products = $this->productDB->search($search);
            include 'view/list.php';
        } else {
        }
    }
}
