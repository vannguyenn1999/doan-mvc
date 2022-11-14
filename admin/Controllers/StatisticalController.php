<?php

class StatisticalController extends BaseController {
    public $statisticalModel;
    public $billModel;

    public function __construct()
    {
        $this->model('BillModel');
        $this->billModel = new BillModel();

        $this->model('StatisticalModel');
        $this->statisticalModel = new StatisticalModel();
    }

    public function Index(){
        $result = $this->statisticalModel->getAll();
        foreach($result as $row){
            $data[] = $row;
        }
        $this->view('','index');
        $this->view('Statistical','main', $data);
    }

    public function Chart(){
        $result = $this->statisticalModel->getNum();
        foreach($result as $row){
            $data[] = $row;
        }
        $this->view('','index');
        $this->view('Statistical','chart',$data);

    }
}