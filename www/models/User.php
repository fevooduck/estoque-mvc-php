<?php

class User extends Model {

  private $info;

  public function verifyUser($email, $pass) {
    $sql = "SELECT * FROM users WHERE email = :uemail AND pass = :upass";
    $sql = $this->db->prepare($sql);
    $sql->bindValue(':uemail', $email);
    $sql->bindValue(':upass', md5($pass));
    $sql->execute();

    if($sql->rowCount() > 0) {
      return true;
    } else {
      return false;
    }
  }

  public function generateToken($uemail) {
    $token = md5(time().rand(0,9999).time().rand(0,9999));
    $sql = "UPDATE users SET token = :token WHERE email = :uemail";
    $sql = $this->db->prepare($sql);
    $sql->bindValue(':token', $token);
    $sql->bindValue(':uemail', $uemail);
    $sql->execute();

    return $token;
  }

  public function checkLogin(){
    if(isset($_SESSION['token']) && !empty($_SESSION['token'])) {
      $token = $_SESSION['token'];
      
      $sql = "SELECT * FROM users WHERE token = :token";
      $sql = $this->db->prepare($sql);
      $sql->bindValue(':token', $token);
      $sql->execute();

      if($sql->rowCount() > 0) {
        $this->info = $sql->fetch();
        
        return true;
      } 
    }
    return false; 
  }
}