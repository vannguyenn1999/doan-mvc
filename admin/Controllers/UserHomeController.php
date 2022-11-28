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
    $this->title_page = 'Shop 666';
    $result = $this->userHomeModel->getTable();
    if(isset($_GET['submit'])){
      $search = addslashes($_GET['search']);
      $result = $this->userHomeModel->search($search);
    }
    $this->main_content = $this->render('./user/Views/main/main.php', $result);
    require_once './user/Views/index.php';
  }

  public function Detail($id)
  {
    // $id = $_GET['id'];
    $check = $this->userHomeModel->check($id);
    if (empty($id) || (!in_array($id, $check))) {
      $_SESSION['error'] = 'mã sản phẩm không hợp lệ';
      header('Location:' . DIR_HTTP . '');
      exit();
    }
    $more = $this->userHomeModel->moreProduct($id);
    $data =  $this->userHomeModel->detailProduct($id);
    $this->main_content = $this->render('./user/Views/main/detail.php', [

      'more' => $more,
      'detail' => $data,
    ]);
    $this->title_page = $data['ten_san_pham'];
    require_once './user/Views/index.php';
  }

  public function Login()
  { 
    $this->main_content = $this->render('./user/Views/main/login.php');
    require_once './user/Views/index.php';
  }

  public function Service()
  {
    $this->title_page = 'Dịch Vụ';
    $this->main_content = $this->render('./user/Views/main/service.php');
    require_once './user/Views/index.php';
  }

  public function Quality()
  {
    $this->title_page = 'Chất Lượng';
    $this->main_content = $this->render('./user/Views/main/quality.php');
    require_once './user/Views/index.php';
  }
  public function Contact()
  {
    if (isset($_POST['submit'])) {
      $_SESSION['success'] = 'Cám Ơn Bạn Đã Đóng Góp Ý Kiến Cho Chúng Tôi !!';
    }
    $this->title_page = 'Liên Hệ';
    $this->main_content = $this->render('./user/Views/main/contact.php');
    require_once './user/Views/index.php';
  }
  public function Product()
  {
    if (isset($_GET['trang'])) {
      $id = $_GET['trang'];
      if ($_GET['trang'] < 1) {
        $id = 1;
      }
    } else {
      $id = 1;
    }
    $this->title_page = 'Danh Sách Sản Phẩm';
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
    }

    if (isset($_POST['submit'])) {
      if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
        $productId = $_POST['masp'];
        if (isset($_POST['sl']) && !empty($_POST['sl'])) {
          $_SESSION['cart'][$productId]['tyt'] = $_POST['sl'];
        } else {
          $_SESSION['error'] = 'Lỗi';
          header('Location: ' . DIR_HTTP . '/UserHomeController/Cart');
        }
        $_SESSION['cart'][$productId]['tong'] =  (int)$_SESSION['cart'][$productId]['tyt'] *  (int)$_SESSION['cart'][$productId]['gia'];
      }
    }
    $this->title_page = 'Giỏ Hàng';
    $this->main_content = $this->render('./user/Views/main/cart.php');
    require_once './user/Views/index.php';

    // unset($_SESSION['cart']);
  }


  public function Remove()
  {
    if (isset($_GET['id'])) {
      $productId = $_GET['id'];
      unset($_SESSION['cart'][$productId]);
      header('Location: ' . DIR_HTTP . '/UserHomeController/Cart');
    }
    $this->main_content = $this->render('./user/Views/main/cart.php');
    require_once './user/Views/index.php';
  }




  public function Payment()
  {
    $this->title_page = 'Thanh Toán';
    if (isset($_SESSION['cart']) && $_SESSION['cart'] != null) {
      if (isset($_POST['submit'])) {
        $mahd =  date('dmY') . '-' . date('Hi');
        $ten_nguoi_dat = $_POST['fullname'];
        $email_nguoi_dat = $_POST['email'];
        $sdt = $_POST['mobile'];
        $dia_chi = $_POST['address'];
        $note = $_POST['note'];
        $tong = $_POST['tong'];
        $phuong_thuc = $_POST['method'];

        if ($phuong_thuc == 0) {
          $tt = 'Trực Tuyến';
        } else if ($phuong_thuc == 1) {
          $tt = 'COD';
        }

        if (empty($this->error)) {
          $this->userHomeModel->mahd = $mahd;
          $this->userHomeModel->ten_nguoi_dat = $ten_nguoi_dat;
          $this->userHomeModel->email_nguoi_nhan = $email_nguoi_dat;
          $this->userHomeModel->sdt_nguoi_nhan = $sdt;
          $this->userHomeModel->dc_nguoi_nhan = $dia_chi;
          $this->userHomeModel->ghi_chu = $note;
          $this->userHomeModel->phuong_thuc = $tt;
          $this->userHomeModel->tong = $tong;

          $is_insert = $this->userHomeModel->addCart();
          if ($is_insert) {
            $_SESSION['success'] = 'Thanh Toán thành công';
          } else {
            $_SESSION['error'] = 'Thanh Toán thất bại';
          }
          header('Location: ' . DIR_HTTP . '/UserHomeController/Invoice');
          exit();
        }
      }
      $this->main_content = $this->render('./user/Views/main/payment.php');
      require_once './user/Views/index.php';
    } else {
      $_SESSION['error'] = 'Bạn Cần Phải Có Sản Phẩm Trong Giỏ Hàng';
      header('Location: ' . DIR_HTTP . '/UserHomeController/Cart');
      exit();
    }
  }

  public function Invoice()
  {
    $msp = $tsp = $sl = $g = [];
    foreach ($_SESSION['cart'] as $k => $v) :
      $msp[] .=  $v['ma_san_pham'];
      $tsp[] .=  $v['ten_san_pham'];
      $sl[] .=  $v['tyt'];
      $g[] .=  $v['gia'];
    endforeach;
    $this->userHomeModel->mahd = date('dmY') . '-' . date('Hi');

    for ($i = 0; $i < count($_SESSION['cart']); $i++) {

      $this->userHomeModel->ma_sp = $msp[$i];
      $this->userHomeModel->ten_san_pham = $tsp[$i];
      $this->userHomeModel->so_luong = $sl[$i];
      $this->userHomeModel->gia = $g[$i];
      $this->userHomeModel->thanh_tien = $sl[$i] *  $g[$i];
      $this->userHomeModel->addInvoice();
      $this->userHomeModel->updateProduct($this->userHomeModel->ma_sp);
    }
    $this->title_page = 'Hoá Đơn';
    unset($_SESSION['cart']);
    header('Location: ' . DIR_HTTP . '/UserHomeController/Thank');
    exit();
  }

  public function Thank()
  { 
    $this->title_page = 'Lời Cám Ơn';
    $result = $this->userHomeModel->getInvoice();
    $idDetail = $result['ma_don_hang'];
    $detail = $this->userHomeModel->getDetailInvoice($idDetail);
    $this->main_content = $this->render('./user/Views/main/thank.php', [
      'result' => $result,
      'detail' => $detail,
    ]);
    require_once './user/Views/index.php';
  }
}
