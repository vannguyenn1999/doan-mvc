<?php

class StatisticalController extends BaseController
{
    public $statisticalModel;
    public $billModel;

    public function __construct()
    {
        $this->model('BillModel');
        $this->billModel = new BillModel();

        $this->model('StatisticalModel');
        $this->statisticalModel = new StatisticalModel();
    }

    public function Index()
    {
        $this->title_page = 'Thống Kê';

        $result = $this->statisticalModel->getAll();
        foreach ($result as $row) {
            $data[] = $row;
        }
        $this->view('', 'index');
        $this->view('Statistical', 'main', $data);
    }

    public function mostProduct()
    {
        $this->title_page = 'Sản Phẩm Bán Chạy Nhất';
        $result = $this->statisticalModel->mostProduct();
        foreach ($result as $row) {
            $data[] = $row;
        }
        $this->view('', 'index');
        $this->view('Statistical', 'most-product', $data);
    }

    public function stillProduct()
    {
        if (isset($_GET['trang'])) {
            $id = $_GET['trang'];
            if ($_GET['trang'] < 1) {
                $id = 1;
            }
        } else {
            $id = 1;
        }

        if (isset($_POST['submit'])) {
            $so_luong = $_POST['sl'];
            $masp = $_POST['masp'];
            if (empty($so_luong)) {
                $this->error = 'Mời Bạn Nhập Số Lượng';
            }
            if (empty($this->error)) {
                $is_update = $this->statisticalModel->updateSL($masp, $so_luong);
                if ($is_update) {
                    $_SESSION['success'] = 'Thêm thành công';
                } else {
                    $_SESSION['error'] = 'Sửa thất bại';
                }
                header('Location: ' . DIR_HTTP . '/StatisticalController/StillProduct');
                exit();
            }
        }
        $this->title_page = 'Sản Phẩm Còn Lại';
        $result = $this->statisticalModel->stillProduct($id);
        $this->view('', 'index');
        $this->view('Statistical', 'still-product', [
            'result' => $result,
            'error' => $this->error,
        ]);
    }

    public function Turnover(){
        $this->view('', 'index');
        $this->view('Statistical', 'turnover');
    }
}
