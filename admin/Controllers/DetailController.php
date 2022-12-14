<?php

class DetailController extends BaseController
{

    protected $detailModel;
    public function __construct()
    {
        $this->model("DetailModel");
        $this->detailModel = new DetailModel();
    }
    public function Index()
    {
        if (isset($_GET['trang'])) {
            $id = $_GET['trang'];
            if ($_GET['trang'] < 1) {
                $id = 1;
            }
        } else {
            $id = 1;
        }
        $this->title_page = 'Danh Sách Thông Tin Chi Tiết Sản Phẩm';

        $this->main_content =  $this->detailModel->getTable($id);
        $this->view("", 'index');
        $this->view("Detail", 'main', $this->main_content);
    }



    public function GetDetail($id)
    {
        $this->main_content = $this->detailModel->getbyId($id);
        $this->view("", 'index');
        $this->view("Detail", 'update', $this->main_content);
    }

    public function UpdateDetail()
    {
        $this->title_page = 'Chi Tiết Sản Phẩm';


        $check = $this->detailModel->getMaSP();

        $id = $_GET['id'];
        if (empty($id) || !in_array($id, $check)) {
            $_SESSION['error'] = 'id không hợp lệ';
            header('Location: ' . DIR_HTTP . '/DetailController/Index');
            exit();
        }

        if (isset($_POST['submit'])) {
            $cauhinh = $_POST['cauhinh'];
            $camsau = $_POST['camsau'];
            $camtruoc = $_POST['camtruoc'];
            $ram = $_POST['ram'];
            $dungluong = $_POST['dungluong'];
            $giamgia = $_POST['giamgia'];

            $this->detailModel->cau_hinh = $cauhinh;
            $this->detailModel->cam_sau = $camsau;
            $this->detailModel->cam_truoc = $camtruoc;
            $this->detailModel->ram = $ram;
            $this->detailModel->dung_luong = $dungluong;
            $this->detailModel->giam_gia = $giamgia;
            $is_update = $this->detailModel->updateDetail($id);

            if ($is_update) {
                $_SESSION['success'] = 'Sửa thành công';
            } else {
                $_SESSION['error'] = 'Sửa thất bại';
            }
            header('Location: ' . DIR_HTTP . '/DetailController/Index');
            exit();
        }

        $this->GetDetail($id);
    }

    public function AddDetail()
    {
        $this->title_page = 'Thêm Thông Tin Chi Tiết Sản Phẩm';
        $result = $this->detailModel->getSP();


        if (isset($_POST['submit'])) {
            $masp = $_POST['masp'];
            $cauhinh = $_POST['cauhinh'];
            $sau = $_POST['sau'];
            $truoc = $_POST['truoc'];
            $ram = $_POST['ram'];
            $dungluong = $_POST['dungluong'];
            $khuyenmai = $_POST['khuyenmai'];

            if (empty($cauhinh)) {
                $this->error['cauhinh'] = "Mời Bạn Nhập Thông Tin";
            }
            if (empty($sau)) {
                $this->error['sau'] = "Mời Bạn Nhập Thông Tin";
            }
            if (empty($truoc)) {
                $this->error['truoc'] = "Mời Bạn Nhập Thông Tin";
            }
            if (empty($ram)) {
                $this->error['ram'] = "Mời Bạn Nhập Thông Tin";
            }
            if (empty($dungluong)) {
                $this->error['dungluong'] = "Mời Bạn Nhập Thông Tin";
            }

            if (empty($this->error)) {
                $this->detailModel->ma_san_pham = $masp;
                $this->detailModel->cau_hinh = $cauhinh;
                $this->detailModel->cam_sau = $sau;
                $this->detailModel->cam_truoc = $truoc;
                $this->detailModel->ram = $ram;
                $this->detailModel->dung_luong = $dungluong;
                $this->detailModel->giam_gia = $khuyenmai;
                $is_insert = $this->detailModel->addDetail();
                if ($is_insert) {
                    $_SESSION['success'] = 'Thêm thành công';
                } else {
                    $_SESSION['error'] = 'Thêm thất bại';
                }
                header('Location: ' . DIR_HTTP . '/DetailController/Index');
                exit();
            }
        }

        $this->view("", 'index');
        $this->view("Detail", 'create', [
            'data' => $result,
            'error' => $this->error,
        ]);
    }

    public function SearchDetail()
    {
        $this->title_page = 'Tìm Kiếm Thông Tin Chi Tiết Sản Phẩm';
        $result = [0, []];
        if (isset($_POST['submit'])) {
            $search = addslashes($_POST['search']);

            $this->detailModel->ten_san_pham = $search;
            $result = $this->detailModel->search();
        }
        $this->view('', 'index');
        $this->view('Detail', 'search', [
            'search' => $search,
            'count' => $result[0],
            'info' => $result[1],
        ]);
    }

    public function DeleteDetail($id)
    {
        $is_delete = $this->detailModel->deletebyId($id);
        if ($is_delete) {
            $_SESSION['success'] = 'Xóa thành công';
        } else {
            $_SESSION['error'] = 'Xóa thất bại';
        }
        header('Location: ' . DIR_HTTP . '/DetailController/Index');
        exit();
    }
}
