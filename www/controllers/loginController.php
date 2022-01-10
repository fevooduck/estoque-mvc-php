<?php

class loginController extends Controller {

  public function index() {
    $data = array(
      'msg' => ''
    );

    if(!empty($_POST['email'])) {
      $uemail = $_POST['email'];
      $upassword = $_POST['pass'];

      $user = new User();

      if($user->verifyUser($uemail, $upassword)) {

        $token = $user->generateToken($uemail);
        $_SESSION['token'] = $token;

        header('Location: '.BASE_URL);
        exit;

      } else {
        $data['msg'] = 'Usuário ou senha inválidos';
      }
    }

    $this->loadView('login', $data);
  }

  public function sair(){
    unset($_SESSION['token']);
    header('Location: '.BASE_URL);
    exit;
  }
}