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
            $username = addslashes($_POST['username']);
            $password = addslashes($_POST['password']);

            if(empty($username)){
                $this->error['username'] = 'Mời Bạn Nhập Thông Tin';
            }else if (strlen($username) < 4){
                $this->error['username'] = 'Phải Lớn Hơn 4 Ký Tự';
            }

            if(empty($password)){
                $this->error['password'] = 'Mời Bạn Nhập Thông Tin';
            }else if (strlen($password) < 4){
                $this->error['password'] = 'Phải Lớn Hơn 4 Ký Tự';
            }

            if (empty($this->error)) {
                $this->loginModel->username_admin = $username;
                $this->loginModel->password_admin = $password;
                $result = $this->loginModel->Login();
                if ($result >= 1) {
                    $_SESSION['admin_login'] = 'Chào Mừng Bạn Đến Với Trang Chủ';
                    header('Location: '.DIR_HTTP.'/HomeController/index');
                    exit();
                } else {
                    $_SESSION['error'] = 'Kiểm Tra lại';
                }
            }
        }
        $this->view('Login', 'Login',$this->error);
    }
}
