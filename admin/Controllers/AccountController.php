<?php

class AccountController extends BaseController
{
    protected $accountModel;

    public function __construct()
    {
        $this->model('AccountModel');
        $this->accountModel = new AccountModel;
    }

    public function Index(){
        $account = $this->accountModel->getTable();
        $this->view('','index');
        $this->view('Account','main',$account);
    }
}
