<?php

class Products extends Model {

  public function getProducts() {
    $array = array();

    $sql = "SELECT * FROM products";
    $sql = $this->db->query($sql);
    
    if($sql->rowCount() > 0) {
      $array = $sql->fetchAll();
    }

    return $array;
  }

  public function addProduct($name, $price, $cust_price, $quantity, $min_quantity) {
    $sql = "INSERT INTO products (name, price, cust_price, quantity, min_quantity) VALUES (:name, :price, :cust_price, :quantity, :min_quantity)";
    $sql = $this->db->prepare($sql);
    $sql->bindValue(":name", $name);
    $sql->bindValue(":price", $price);
    $sql->bindValue(":cust_price", $cust_price);
    $sql->bindValue(":quantity", $quantity);
    $sql->bindValue(":min_quantity", $min_quantity);
    $sql->execute();
  }
}
