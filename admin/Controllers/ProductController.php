<?php

class ProductController extends BaseController
{

    protected $productModel;
    protected $companyModel;
    protected $brandModel;

    public function __construct()
    {
        $this->model("ProductModel");
        $this->model("CompanyModel");
        $this->model("BrandModel");
        $this->productModel = new ProductModel();
        $this->companyModel = new CompanyModel();
        $this->brandModel = new BrandModel();
    }
    public function Index()
    {
        $product = $this->productModel->getTable();
        $this->view("", 'index');
        $this->main_content = $product;
        $this->view("Product", 'main', $this->main_content);
    }


    public function AddProduct()
    {
        if (isset($_POST['submit'])) {
            $ma_san_pham = $_POST['masp'];
            $ten_san_pham = $_POST['tensp'];
            $gia = $_POST['giasp'];
            $so_luong = $_POST['soluong'];
            $kieu = $_POST['kieu'];
            $nhan_hieu = $_POST['nhanhieu'];
            $thong_tin = $_POST['thongtin'];

            if ($_FILES['anh']['error'] == 0) {
                //validate khi có file upload lên thì bắt buộc phải là ảnh và dung lượng không quá 2 Mb
                $extension = pathinfo($_FILES['anh']['name'], PATHINFO_EXTENSION);
                $extension = strtolower($extension);
                $arr_extension = ['jpg', 'jpeg', 'png', 'gif'];

                $file_size_mb = $_FILES['anh']['size'] / 1024 / 1024;
                //làm tròn theo đơn vị thập phân
                $file_size_mb = round($file_size_mb, 2);

                if (!in_array($extension, $arr_extension)) {
                    $this->error = 'Cần upload file định dạng ảnh';
                } else if ($file_size_mb > 2) {
                    $this->error = 'File upload không được quá 2MB';
                }

                $dir_uploads = __DIR__ . '/../assets/image/uploads';
                $filename = time() . '-product-' . $_FILES['anh']['name'];
                move_uploaded_file($_FILES['anh']['tmp_name'], $dir_uploads . '/' . $filename);
            }
            $this->productModel->ma_san_pham  = $ma_san_pham;
            $this->productModel->ten_san_pham = $ten_san_pham;
            $this->productModel->anh = $filename;
            $this->productModel->gia = $gia;
            $this->productModel->kieu = $kieu;
            $this->productModel->ten_nhan_hieu = $nhan_hieu;
            $this->productModel->thong_tin = $thong_tin;
            $this->productModel->so_luong = $so_luong;
            $is_insert = $this->productModel->addProduct();
            if ($is_insert) {
                $_SESSION['success'] = 'Thêm thành công';
            } else {
                $_SESSION['error'] = 'Thêm thất bại';
            }
            header('Location: http://localhost/doan-mvc/ProductController/Index');
            exit();
        }
        // $this->productModel->addProduct($data);
        $this->view("", 'index');
        $company = $this->companyModel->getTable();
        $brand = $this->brandModel->getTable();
        $this->view('Product', 'create', [
            'company' => $company,
            'brand' => $brand,
        ]);
    }

    public function UpdateProduct()
    {
        $id = $_GET['id'];
        if (empty($id)) {
            $_SESSION['error'] = 'id không hợp lệ';
            header('Location: http://localhost/doan-mvc/ProductController/Index');
            exit();
        }

        if (isset($_POST['submit'])) {
            $ten_san_pham = $_POST['tensp'];
            $gia = $_POST['giasp'];
            $so_luong = $_POST['soluong'];
            $kieu = $_POST['kieu'];
            $nhan_hieu = $_POST['nhanhieu'];
            $thong_tin = $_POST['thongtin'];

            $anh = $this->productModel->getImage($id);

            if ($_FILES['anh']['error'] == 0) {
                //validate khi có file upload lên thì bắt buộc phải là ảnh và dung lượng không quá 2 Mb
                $extension = pathinfo($_FILES['anh']['name'], PATHINFO_EXTENSION);
                $extension = strtolower($extension);
                $arr_extension = ['jpg', 'jpeg', 'png', 'gif'];

                $file_size_mb = $_FILES['anh']['size'] / 1024 / 1024;
                //làm tròn theo đơn vị thập phân
                $file_size_mb = round($file_size_mb, 2);

                if (!in_array($extension, $arr_extension)) {
                    $this->error = 'Cần upload file định dạng ảnh';
                } else if ($file_size_mb > 2) {
                    $this->error = 'File upload không được quá 2MB';
                }

                $dir_uploads = __DIR__ . '/../assets/image/uploads';
                $filename = time() . '-product-' . $_FILES['anh']['name'];
                move_uploaded_file($_FILES['anh']['tmp_name'], $dir_uploads . '/' . $filename);
            } else {
                $filename = $anh['anh'];
            }
            $this->productModel->ten_san_pham = $ten_san_pham;
            $this->productModel->anh = $filename;
            $this->productModel->gia = $gia;
            $this->productModel->kieu = $kieu;
            $this->productModel->ten_nhan_hieu = $nhan_hieu;
            $this->productModel->thong_tin = $thong_tin;
            $this->productModel->so_luong = $so_luong;
            $is_update = $this->productModel->updateProduct($id);
            if ($is_update) {
                $_SESSION['success'] = 'Sửa thành công';
            } else {
                $_SESSION['error'] = 'Sửa thất bại';
            }
            header('Location: http://localhost/doan-mvc/ProductController/Index');
            exit();
        }
        $this->GetProduct($id);
    }

    public function GetProduct($id)
    {
        $this->main_content = $this->productModel->getbyId($id);
        $this->view('', 'index');
        $company = $this->companyModel->getTable();
        $brand = $this->brandModel->getTable();
        $this->view('Product', 'update', [
            'content' => $this->main_content,
            'company' => $company,
            'brand' => $brand,
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

    public function test(){
        $this->model("LoginModel");
        $loginModel = new LoginModel;

        $loginModel->username_admin = 'admin';
        $loginModel->password_admin = 'admin';

        $result = $loginModel->Login();
        $this->view('Detail','test',$result);
    }
}
