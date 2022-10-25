<?php



class HomeController extends BaseController
{
    protected $homeModel;

    public function __construct()
    {

        $this->model("HomeModel");
        $this->homeModel = new HomeModel();
        $message = "Chào Mừng Bạn Đến Với Trang Chủ";
        echo "<script type='text/javascript'>alert('$message');</script>";
        // if (!isset($_SESSION['admin_login'])) {
        //     $message = "Vui Lòng Đăng Nhập";
        //     echo "<script type='text/javascript'>alert('$message');</script>";
        //     $this->view('Login', 'Login');
        //     exit();
        // }
    }
    public function index()
    {

        $this->main_content = "SHOP 123";
        $this->view('', 'index',);
        $this->view('', 'main', $this->main_content);
    }
}
