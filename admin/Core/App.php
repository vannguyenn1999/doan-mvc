<?php

class App
{

    // http://localhost/mvc_test/Dien-Thoai/Danh-Sach/Chi-Tiet-San-Pham/1



    protected $controller = 'HomeController';
    protected $action = 'index';
    protected $param = [];


    function __construct()
    {
        // Array ( [0] => Dien-Thoai [1] => Danh-Sach [2] => Chi-Tiet-San-Pham [3] => 2 )
        $url = $this->XuLy_Url();

        if (empty($url)) {
            $url[0] = $this->controller;
        }

        // ! xử lý Controller
        // kiểm tra xem file có tồn tại không để require_once 
        if (file_exists("./admin/Controllers/" . $url[0] . ".php")) {
            $this->controller = $url[0];
            unset($url[0]);
        }
        // if(empty)


        require_once "./admin/Controllers/" . $this->controller . ".php";
        // $this->controller = new $this->controller;
        // ! Xử Lý Action (Function)
        // kiểm tra xem phương thúc có tồn tại hay không ?
        // ! Tên class và tên file phải trùng nhau

        if (isset($url[1])) {
            // ! tên lớp , tên phương thức
            if (method_exists($this->controller, $url[1])) {
                $this->action = $url[1];
            }
            unset($url[1]);
        }


        // ! Xử Lý Params

        $this->param = $url ? array_values($url) : [];

        // echo $this->controller . "<br>";
        // echo $this->action . "<br>";
        // print_r($this->param);


        // ! tạo ra 1 lớp có tên là controller vả chạy phương thức action

         call_user_func_array([new $this->controller, $this->action], $this->param);
    }

    public function XuLy_Url()
    {

        // Link Url Cần Xử Lý
        // Dien-Thoai/Danh-Sach/Chi-Tiet-San-Pham/1

        // Loại bỏ các khoảng trắng và ký tự đặc biệt sau đó xử lý cắt sau dấu " / " 

        if (isset($_GET['url'])) {
            // filter_var(trim($_GET["action"] , "/"));  Đảm bảo luồng dữ liệu sạch không khoảng trắng không ký tự đặc biệt

            return explode("/", filter_var(trim($_GET["url"], "/")));
        }
    }
}
