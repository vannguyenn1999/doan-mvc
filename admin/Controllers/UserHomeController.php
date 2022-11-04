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

  public function Login()
  {
    $this->main_content = $this->render('./user/Views/main/login.php');
    require_once './user/Views/index.php';
  }

  public function Service()
  {
    $this->main_content = $this->render('./user/Views/main/service.php');
    require_once './user/Views/index.php';
  }

  public function Quality()
  {
    $this->main_content = $this->render('./user/Views/main/quality.php');
    require_once './user/Views/index.php';
  }
  public function Contact()
  {
    $this->main_content = $this->render('./user/Views/main/contact.php');
    require_once './user/Views/index.php';
  }
  public function Product()
  {
    if(isset($_GET['trang'])){
      $id = $_GET['trang'];
    }else{
      $id = 1;
    }
    if($_GET['trang'] < 1){
      $id = 1;
    }
   
    $result = $this->userHomeModel->page($id);
    $this->main_content = $this->render('./user/Views/main/product.php', $result);
    require_once './user/Views/index.php';
  }


  public function getCart(){
    $productId = $_GET['id'];
    $_SESSION['cart']['id'] = $productId;

    echo "<pre>";
    print_r($_SESSION['cart']);
    echo "</pre>";
  }

  public function Cart()
  {
    // $id = $_GET['id'] ;
    // $result = $this->userHomeModel->getProduct($id);
    $result = $_SESSION['giohang'] = [
      0 => ['TenDT' => 'OPPO A93', 'Amount' => 3, 'Gia' => 7300000],
      1 => ['TenDT' => 'Vsmart Aris', 'Amount' => 4, 'Gia' => 6300000],
      2 => ['TenDT' => 'Realme 7 Pro', 'Amount' => 5, 'Gia' => 8300000]
    ];
    $this->main_content = $this->render('./user/Views/main/cart.php', $result);
    require_once './user/Views/index.php';
  }

  

  public function Payment()
  {
    if(isset($_POST['submit'])){
      $_SESSION['success'] = 'Thanh Toán Thành Công';
      header('Location: http://localhost/doan-mvc/UserHomeController/Thank');
      exit();
    }
    $this->main_content = $this->render('./user/Views/main/payment.php');
    require_once './user/Views/index.php';
  }

  public function Thank()
  {
    $this->main_content = $this->render('./user/Views/main/thank.php');
    require_once './user/Views/index.php';
  }
}
