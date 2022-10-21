<?php

class BillController extends BaseController {
    protected $billModel;
    public function __construct()
    {
        $this->model("BillModel");
        $this->billModel = new BillModel;
    }

    public function Index(){
        $this->main_content = $this->billModel->Info();
        $this->view('','index');
        $this->view('Bill','main',$this->main_content);
    }
}