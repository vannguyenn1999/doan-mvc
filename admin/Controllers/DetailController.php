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
        // $san_pham =  $this->detailModel->getSP();
        $result = $this->detailModel->check();
        ;
        $this->view("",'index');
        $this->view("Detail",'create',[
            // 'san-pham' => $san_pham,
            'result' => $result,
        ]);
    }

    public function SearchDetail(){
        $result = [0,[]];
        if(isset($_POST['submit'])){
            $search = addslashes($_POST['search']);

            $this->detailModel->ten_san_pham = $search;
            $result = $this->detailModel->search();
        }
        $this->view('','index');
        $this->view('Detail','search',[
            'search' => $search,
            'count' => $result[0],
            'info' => $result[1],
        ]);
    }

    public function DeleteProduct($id)
    {
        $is_delete = $this->productModel->deletebyId($id);
        if ($is_delete) {
            $_SESSION['success'] = 'Xóa thành công';
        } else {
            $_SESSION['error'] = 'Xóa thất bại';
        }
        header('Location: http://localhost/doan-mvc/ProductController/Index');
        exit();
    }

   
}