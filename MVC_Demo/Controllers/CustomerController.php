<?php
namespace Controllers;

use Models\Customer;
use Models\CustomerDB;
use Models\DBConnection;

class CustomerController
{

  public $customerDB;

  public function __construct()
  {
      $connection = new DBConnection("mysql:host=localhost:3306;dbname=customer_manager", "root", "");
      $this->customerDB = new CustomerDB($connection->connect());
  }

  public function add()
  {
      // Kiểm tra, nếu request method là GET thì trả về giao diện trang Add.php
      // Nếu không (tức là POST), thì lấy dữ liệu từ form, sau đó thêm vào cơ sở dữ liệu
      if ($_SERVER['REQUEST_METHOD'] === 'GET') {
          include 'Views/Add.php';
      } else {
          $name = $_POST['name'];
          $email = $_POST['email'];
          $address = $_POST['address'];

          $customer = new Customer($name, $email, $address);
          $this->customerDB->create($customer);
          $message = 'Customer created';
          include 'Views/Add.php';
      }
  }
}