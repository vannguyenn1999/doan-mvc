<?php



class HomeController extends BaseController
{
    protected $homeModel;

    public function __construct()
    {

        $this->model("HomeModel");
        $this->homeModel = new HomeModel();
        // $message = "Chào Mừng Bạn Đến Với Trang Chủ";
        // echo "<script type='text/javascript'>alert('$message');</script>";
    }
    public function index()
    {
        if (isset($_SESSION['admin_login'])) {
            $message = $_SESSION['admin_login'];
            echo "<script type='text/javascript'>alert('$message');</script>";
        
          }
          if (!isset($_SESSION['admin_login'])) {
            $message = "Vui Lòng Đăng Nhập";
            echo "<script type='text/javascript'>alert('$message');</script>";
            header('Location: http://localhost/doan-mvc/LoginController/Login');
            exit();
          }
        $this->main_content = "SHOP 123";
        $this->view('', 'index',);
        $this->view('', 'main', $this->main_content);
    }

    public function Logout()
    {
        // xoá session tạo ra lúc đăng nhập
        unset($_SESSION['admin_login']);
        // chuyển hướng về trang login

        // $_SESSION['success'] = "Đăng Xuất";
        header('Location: http://localhost/doan-mvc');
        exit();
    }
}
