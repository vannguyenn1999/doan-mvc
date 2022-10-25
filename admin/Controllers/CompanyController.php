<?php

class CompanyController extends BaseController
{
    protected $companyModel;

    public function __construct()
    {
        $this->model("CompanyModel");
        $this->companyModel = new CompanyModel;
    }
    public function Index()
    {
        $this->main_content = $this->companyModel->getTable();
        $this->view('', 'index');
        $this->view('Company', 'main', $this->main_content);
        // $this->view('Company','main', $this->main_content);
    }

    public function AddCompany()
    {
        if (isset($_POST['submit'])) {

            $nhan_hieu = $_POST['nhanhieu'];
            $thong_tin = $_POST['thongtin'];



            $this->productModel->ten_nhan_hieu = $nhan_hieu;
            $this->productModel->thong_tin = $thong_tin;

            $is_insert = $this->companyModel->addCompany();
            if ($is_insert) {
                $_SESSION['success'] = 'Thêm thành công';
            } else {
                $_SESSION['error'] = 'Thêm thất bại';
            }
            header('Location: http://localhost/doan-mvc/CompanyController/Index');
            exit();
        }
        // $this->productModel->addProduct($data);
        $this->view("", 'index');

        $this->view('Company', 'create');
    }

    public function UpdateCompany($id){
        $this->GetCompany($id);
    }

    public function GetCompany($id)
    {
        $result = $this->companyModel->getbyId($id);
        $this->view('','index');
        $this->view('Company','update',$result);
    }
}
