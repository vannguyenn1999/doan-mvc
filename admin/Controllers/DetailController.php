<?php

class DetailController extends BaseController {

    protected $detailModel;
    public function __construct()
    {
        $this->model("DetailModel");
        $this->detailModel = new DetailModel();
    }
    public function Index(){
        $this->main_content =  $this->detailModel->getTable();;
        $this->view("",'index');
        $this->view("Detail",'main',$this->main_content);
    }

    public function GetDetail($id){
        $this->main_content = $this->detailModel->getbyId($id);
        $this->view("",'index');
        $this->view("Detail",'detail',$this->main_content);
    }
}