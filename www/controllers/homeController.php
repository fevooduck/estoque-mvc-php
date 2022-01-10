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
    $data = array(
      'menu' => array(
        BASE_URL.'home/add' => 'Adicionar Produto',
        BASE_URL.'relatorio' => 'Relatório',
        BASE_URL.'login/sair' => 'Sair'
      ),
    );
    $p = new Products();

    $s = "";

    if(!empty($_GET['busca'])) {
      $s = $_GET['busca'];
    }

    $data['products_list'] = $p->getProducts($s);
    
    $this->loadTemplate('home', $data);
  }

  public function add() {
    $data = array(
      'menu' => array(
        BASE_URL => 'Voltar',
        BASE_URL.'relatorio' => 'Relatório',
        BASE_URL.'login/sair' => 'Sair'
      ),
    );
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

  private function filter_post_money($t){
    $price = str_replace(",", ".", $t);
    $price = str_replace(".", "", $price);
    $price = filter_var($price, FILTER_VALIDATE_FLOAT);
    return $price;
  }

  public function edit($id) {
    $data = array(
      'menu' => array(
        BASE_URL => 'Adicionar Produto',
        BASE_URL.'relatorio' => 'Relatório',
        BASE_URL => 'Voltar',
        BASE_URL.'login/sair' => 'Sair'
      ),
    );
    $p = new Products();

    if(!empty($_POST['name'])) {
      $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
      $price = filter_input(INPUT_POST, 'price');
      $price = $this->filter_post_money($price);
      $cust_price = filter_input(INPUT_POST, 'cust_price');
      $cust_price = $this->filter_post_money($cust_price);
      $quantity = filter_input(INPUT_POST, 'quantity');
      $quantity = $this->
      $min_quantity = filter_input(INPUT_POST, 'min_quantity');

      // $name = $_POST['name'];
      // $price = $_POST['price'];
      $cust_price = $_POST['cust_price'];
      $quantity = $_POST['quantity'];
      $min_quantity = $_POST['min_quantity'];

      $p->editProduct($id, $name, $price, $cust_price, $quantity, $min_quantity);

      header("Location: ".BASE_URL);
      exit;
    }

    $data['info'] = $p->getProduct($id);
    
    $this->loadTemplate('edit', $data);

  }
  
}