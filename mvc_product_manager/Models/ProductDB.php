<?php
// Insert dữ liệu vào Database
namespace Models;

class ProductDB
{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function create($product)
    {
        $sql = "INSERT INTO product(`name`, `price`, `description`, `producer`) VALUES (?, ?, ?, ?)";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $product->name);
        $statement->bindParam(2, $product->price);
        $statement->bindParam(3, $product->description);
        $statement->bindParam(4, $product->producer);
        //Thực thi Statement
        return $statement->execute();
    }
    //Hiển thị danh sách khách hàng
    public function getAll()
    {
        $sql = "SELECT * FROM product";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        $products = [];
        foreach ($result as $row) {
            $product = new Product($row['name'], $row['price'], $row['description'], $row['producer']);
            $product->id = $row['id'];
            $products[] = $product;
        }
        return $products;
    }

    //Xoá một khách hàng
    public function get($id)
    {
        $sql = "SELECT * FROM product WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        $statement->execute();
        $row = $statement->fetch();
        $product = new Product($row['name'], $row['price'], $row['description'], $row['producer']);
        $product->id = $row['id'];
        return $product;
    }

    public function delete($id)
    {
        $sql = "DELETE FROM product WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        return $statement->execute();
    }

    //Update một khách hàng

    public function update($id, $product)
    {
        $sql = "UPDATE product SET `name` = ?, price = ?, `description` = ?, producer = ?, WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $product->name);
        $statement->bindParam(2, $product->email);
        $statement->bindParam(3, $product->address);
        $statement->bindParam(4, $id);
        return $statement->execute();
    }

    //Search một khách hàng

    public function search($search)
    {

        // Nếu $search rỗng thì báo lỗi, tức là người dùng chưa nhập liệu mà đã nhấn submit.
        if (empty($search)) {
            echo "Yeu cau nhap du lieu vao o trong";
        } else {
            $sql = "SELECT * FROM `product` WHERE `name` LIKE \"%$search%\" OR `description` LIKE \"%$search%\"";

            $statement = $this->connection->prepare($sql);
            $statement->execute();
            $result = $statement->fetchAll(); // Associative Array
            $products = [];

            // Chuyển result từ Associative Array sang mảng các đối tượng product
            foreach ($result as $row) {
                $product = new Product($row['name'], $row['price'], $row['description'], $row['producer']);
                $product->id = $row['id'];
                $products[] = $product;
            }

            return $products;
        }
    }
}
