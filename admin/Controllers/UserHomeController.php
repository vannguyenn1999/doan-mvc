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
    if (isset($_GET['trang'])) {
      $id = $_GET['trang'];
    } else {
      $id = 1;
    }
    if ($_GET['trang'] < 1) {
      $id = 1;
    }

    $result = $this->userHomeModel->page($id);
    $this->main_content = $this->render('./user/Views/main/product.php', $result);
    require_once './user/Views/index.php';
  }

  public function Cart()
  {
    if (isset($_GET['id'])) {
      $productId = $_GET['id'];
      $product = $this->userHomeModel->getProduct($productId);
      $_SESSION['cart'][$productId] = $product;
      $_SESSION['cart'][$productId]['tyt'] = 1;
      $_SESSION['cart'][$productId]['tong'] = $_SESSION['cart'][$productId]['gia'];
    } else {
      $_SESSION['cart'];
    }
    // unset($_SESSION['cart']);

    if (isset($_POST['submit'])) {
      $productId = $_POST['masp'];
      $_SESSION['cart'][$productId]['tyt'] = $_POST['sl'];
      $_SESSION['cart'][$productId]['tong'] =  $_SESSION['cart'][$productId]['tyt'] *  $_SESSION['cart'][$productId]['gia'];
    }

    $this->main_content = $this->render('./user/Views/main/cart.php');
    require_once './user/Views/index.php';
  }


  public function Remove()
  {
    if (isset($_GET['id'])) {
      $productId = $_GET['id'];
      unset($_SESSION['cart'][$productId]);
      header('Location: http://localhost/doan-mvc/UserHomeController/Cart');
    }
    $this->main_content = $this->render('./user/Views/main/cart.php');
    require_once './user/Views/index.php';
  }


  public function Payment()
  {
    if (isset($_POST['submit'])) {
        $mahd =  date('dmY') .'-'. date('His');
        $ten_nguoi_dat = $_POST['fullname'];
        $email_nguoi_dat = $_POST['email'];
        $sdt = $_POST['number'];
        $dia_chi = $_POST['address'];
        $note = $_POST['note'];
        $phuong_thuc = $_POST['method'];

        if(empty($this->error)){
          $this->userHomeModel->mahd = $mahd;
          $this->userHomeModel->ten_nguoi_dat = $ten_nguoi_dat;
          $this->userHomeModel->email_nguoi_nhan = $email_nguoi_dat;
          $this->userHomeModel->sdt_nguoi_nhan = $sdt;
          $this->userHomeModel->dc_nguoi_nhan = $dia_chi;
          $this->userHomeModel->ghi_chu = $note;
          $this->userHomeModel->phuong_thuc = $phuong_thuc;

          $is_insert = $this->userHomeModel->addCart();
          if ($is_insert) {
            $_SESSION['success'] = 'Thêm thành công';
        } else {
            $_SESSION['error'] = 'Thêm thất bại';
        }
        header('Location: http://localhost/doan-mvc/UserHomeController/Index');
        exit();
        }

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
