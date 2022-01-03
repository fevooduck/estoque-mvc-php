<?php
class homeController extends Controller {
  
  private $user;
  
  public function __construct() {
    parent::__construct();
    
    $this->user = new User();
    if (!$this->user->checkLogin()){
      header("Location: ".BASE_URL."login");
      exit;
    }
  }
  
  public function index() {
    $data = array();
    $p = new Products();

    $data['products_list'] = $p->getProducts();
    
    $this->loadTemplate('home', $data);
  }

  public function add() {
    $data = array();
    $p = new Products();

    if(!empty($_POST['name'])) {
      $name = $_POST['name'];
      $price = $_POST['price'];
      $cust_price = $_POST['cust_price'];
      $quantity = $_POST['quantity'];
      $min_quantity = $_POST['min_quantity'];

      $p->addProduct($name, $price, $cust_price, $quantity, $min_quantity);

      header("Location: ".BASE_URL);
      exit;
    }
    
    $this->loadTemplate('add', $data);

  }
  
}