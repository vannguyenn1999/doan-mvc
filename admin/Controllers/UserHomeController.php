<?php

class UserHomeController extends BaseController
{
  public $userHomeModel;
  public function __construct()
  {
    $this->model('UserModel');
    $this->userHomeModel = new UserModel;
  }
  public function index()
  {
    $result = $this->userHomeModel->getTable();
    $this->main_content = $this->render('./user/Views/main/main.php', $result);
    require_once './user/Views/index.php';
  }

  public function Detail()
  {
    $id = $_GET['id'];
    $check = $this->userHomeModel->check($id);
    if (empty($id) || (!in_array($id, $check))) {
      $_SESSION['error'] = 'mã sản phẩm không hợp lệ';
      header('Location: http://localhost/doan-mvc/');
      exit();
    }
    $more = $this->userHomeModel->moreProduct($id);
    $data =  $this->userHomeModel->detailProduct($id);
    $this->main_content = $this->render('./user/Views/main/detail.php', [
      
      'more' => $more,
      'detail' => $data,
    ]);
    require_once './user/Views/index.php';
  }

  public function Login(){
    $this->main_content = $this->render('./user/Views/main/login.php');
    require_once './user/Views/index.php';
  }

  public function Service(){
    $this->main_content = $this->render('./user/Views/main/service.php');
    require_once './user/Views/index.php';
  }

  public function Quality(){
    $this->main_content = $this->render('./user/Views/main/quality.php');
    require_once './user/Views/index.php';
  }
  public function Contact(){
    $this->main_content = $this->render('./user/Views/main/contact.php');
    require_once './user/Views/index.php';
  }
  public function Product(){
    $result = $this->userHomeModel->getTable();
    $this->main_content = $this->render('./user/Views/main/product.php',$result);
    require_once './user/Views/index.php';
  }

  public function Cart(){
    $this->main_content = $this->render('./user/Views/main/cart.php');
    require_once './user/Views/index.php';
  }

  public function Payment(){
    $this->main_content = $this->render('./user/Views/main/payment.php');
    require_once './user/Views/index.php';
  }
  
}
