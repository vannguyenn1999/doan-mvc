<?php

class LoginController extends BaseController
{

    protected $loginModel;

    public function __construct()
    {
        $this->model("LoginModel");
        $this->loginModel =  new LoginModel;
    }

    public function Index()
    {
        if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $this->loginModel->username_admin = $username;
            $this->loginModel->password_admin = $password;
            $result = $this->loginModel->Login();
            if ($result >= 1) {
                $_SESSION['admin_login'] = 'Đăng Nhập Thành Công';
                header('Location: http://localhost/doan-mvc/HomeController/index');
                exit();
            } else {
                $_SESSION['error'] = 'Kiểm Tra lại';
            }
        }
        $this->view('Login', 'Login');
    }

   
}
