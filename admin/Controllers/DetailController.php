<?php

class DetailController extends BaseController {

    protected $detailModel;
    public function __construct()
    {
        $this->model("DetailModel");
        $this->detailModel = new DetailModel();
    }
    public function Index(){
        $this->main_content =  $this->detailModel->getTable();
        $this->view("",'index');
        $this->view("Detail",'main',$this->main_content);
    }

    public function GetDetail($id){
        $this->main_content = $this->detailModel->getbyId($id);
        $this->view("",'index');
        $this->view("Detail",'detail',$this->main_content);
    }

    public function AddDetail(){
        $san_pham =  $this->detailModel->getSP();
        $thong_tin = $this->detailModel->getTable();
        $this->view("",'index');
        $this->view("Detail",'create',[
            'san-pham' => $san_pham,
            'thong-tin' => $thong_tin,
        ]);
    }

    public function test(){
        $test = $this->detailModel->check();
        // $this->view("",'index');
        $this->view("Detail",'test',$test);

    }
}