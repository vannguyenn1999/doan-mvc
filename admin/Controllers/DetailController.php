<?php

class DetailController extends BaseController {

    protected $detailModel;
    public function __construct()
    {
        $this->model("DetailModel");
        $this->detailModel = new DetailModel();
    }
    public function Index(){
        $this->view("",'index');
        $this->main_content =  $this->detailModel->home();;
       
        $this->view("Detail",'main',$this->main_content);
    }
}