<?php

class Products extends Model {

  public function getProducts($s='') {
    $array = array();

    if(!empty($s)) {
      $sql = "SELECT * FROM products WHERE name LIKE :name";
      $sql = $this->db->prepare($sql);
      $sql->bindValue(':name', '%'.$s.'%');
      $sql->execute();
    } else {
      $sql = "SELECT * FROM products";
      $sql = $this->db->query($sql);
    }
    
    if($sql->rowCount() > 0) {
      $array = $sql->fetchAll();
    }

    return $array;
  }

  private function verifyProduct($name){

    // ... criar regras de validação ...

    return true;

  }

  public function addProduct($name, $price, $cust_price, $quantity, $min_quantity) {

    if($this->verifyProduct($name)) {

      $sql = "INSERT INTO products (name, price, cust_price, quantity, min_quantity) VALUES (:name, :price, :cust_price, :quantity, :min_quantity)";
      $sql = $this->db->prepare($sql);
      $sql->bindValue(":name", $name);
      $sql->bindValue(":price", $price);
      $sql->bindValue(":cust_price", $cust_price);
      $sql->bindValue(":quantity", $quantity);
      $sql->bindValue(":min_quantity", $min_quantity);
      $sql->execute();
    } else {
      echo "Não foi possível adicionar o produto";
    }
  }

  public function editProduct($id, $name, $price, $cust_price, $quantity, $min_quantity) {

    if($this->verifyProduct($name)) {

      $sql = "UPDATE products SET name = :name, price = :price, cust_price = :cust_price, quantity = :quantity, min_quantity = :min_quantity WHERE id = :id";
      $sql = $this->db->prepare($sql);
      $sql->bindValue(":name", $name);
      $sql->bindValue(":price", $price);
      $sql->bindValue(":cust_price", $cust_price);
      $sql->bindValue(":quantity", $quantity);
      $sql->bindValue(":min_quantity", $min_quantity);
      $sql->bindValue(":id", $id);
      $sql->execute();
    } else {
      echo "Não foi possível editar o produto";
    }

  }

  public function getProduct($id){
    $array = array();

    $sql = "SELECT * FROM products WHERE id = :id";
    $sql = $this->db->prepare($sql);
    $sql->bindValue(":id", $id);
    $sql->execute();

    if($sql->rowCount() > 0) {
      $array = $sql->fetch();
    }

    return $array;
  }

  public function getLowQuantityProducts(){
    $array = array();

    $sql = "SELECT * FROM products WHERE quantity < min_quantity";
    $sql = $this->db->query($sql);

    if($sql->rowCount() > 0) {
      $array = $sql->fetchAll();
    }

    return $array;
  }
}
