<?php
namespace Models;

class CustomerDB
{
  public $connection;

  public function __construct($connection)
  {
      $this->connection = $connection;
  }

  public function create($customer){
      $sql = "INSERT INTO customers (`name`, `email`, `address`) VALUES (?, ?, ?)";
      $statement = $this->connection->prepare($sql);
      $statement->bindParam(1, $customer->name);
      $statement->bindParam(2, $customer->email);
      $statement->bindParam(3, $customer->address);
      return $statement->execute();
  }
}