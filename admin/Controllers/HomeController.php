<?php



class HomeController extends BaseController
{
    protected $homeModel;

    public function __construct()
    {

        $this->model("HomeModel");
        $this->homeModel = new HomeModel();
        if (isset($_SESSION['admin_login'])) {
            $message = $_SESSION['admin_login'];
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
    }
    public function Index()
    {
       
        $this->title_page = 'Quản Lý SHOP 666';
        $this->main_content = "SHOP 666";
        $this->view('', 'index',);
        $this->view('', 'main', $this->main_content);
    }

    public function Logout()
    {
        $_SESSION['logout'] = "Đăng Xuất Thành Công";
        unset($_SESSION['admin_login']);
        header('Location: '.DIR_HTTP.'/LoginController');
        exit();
    }
}
