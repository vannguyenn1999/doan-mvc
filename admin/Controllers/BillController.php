<?php

class BillController extends BaseController {
    protected $billModel;
    public function __construct()
    {
        $this->model("BillModel");
        $this->billModel = new BillModel;
    }

    public function Index(){
        $this->title_page = 'Quản Lý Hoá Đơn Đã Xử Lý';
        $this->main_content = $this->billModel->getTable();
        $this->view('','index');
        $this->view('Bill','main',$this->main_content);
    }
    public function Handle(){
        $this->main_content = $this->billModel->getTableHandle();
        $this->view('','index');
        $this->view('Bill','handle',$this->main_content);
    }

    public function Detail(){
        $this->title_page = 'Chi Tiết Hoá Đơn Đã Xử Lý';

        $check = $this->billModel->getMaHD();

        $id = $_GET['id'];
        if (empty($id) || !in_array($id, $check)) {
            $_SESSION['error'] = 'id không hợp lệ';
            header('Location: BillController/Index');
            exit();
        }
        $this->main_content = $this->billModel->getbyId($id);
        $this->view('','index');
        $this->view('Bill','detail',$this->main_content);
    }

    public function BillHandle(){
        $id = $_GET['id'];
        $is_update= $this->billModel->update($id);
        if ($is_update) {
            $_SESSION['success'] = 'Xử Lý thành công';
        } else {
            $_SESSION['error'] = 'Xử Lý thất bại';
        }
        header('Location: DIR_HTTP/BillController/Handle');
        exit();
        
    }
}