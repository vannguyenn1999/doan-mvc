<?php
 
class CompanyController extends BaseController {
    protected $companyModel;

    public function __construct()
    {
        $this->model("CompanyModel");
        $this->companyModel = new CompanyModel;
    }
    public function Index(){
        $this->main_content = $this->companyModel->getTable();
        $this->view('','index');
        $this->view('Company', 'main', $this->main_content);
        // $this->view('Company','main', $this->main_content);
    }
}