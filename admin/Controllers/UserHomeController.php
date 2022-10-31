<?php

class UserHomeController extends BaseController {
    public $userhomeModel;
    public function __construct()
    {
      $this->model('UserModel');
      $this->userhomeModel = new UserModel;
    }
    public function Index(){
        echo "đây là trang người dùng";
    }
}