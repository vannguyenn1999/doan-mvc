<?php

class DetailModel extends BaseModel
{

    const TABLE_NAME = 'thong_tin_san_pham';

    public $ma_san_pham;
    public $ten_san_pham;
    public $cau_hinh;
    public $cam_truoc;
    public $cam_sau;
    public $ram;
    public $dung_luong;
    public $giam_gia;

    public function getTable()
    {
        $obj_select = $this->connect
            ->prepare("SELECT san_pham.ten_san_pham , thong_tin_chi_tiet.* FROM san_pham INNER JOIN thong_tin_chi_tiet ON san_pham.ma_san_pham = thong_tin_chi_tiet.ma_san_pham
                    ORDER BY create_at DESC");
        $arr_select = [];
        $obj_select->execute($arr_select);
        $result = $obj_select->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }


    public function check()
    {

        $sql_obj = $this->connect->prepare("SELECT ma_san_pham FROM thong_tin_chi_tiet ");
        $arr_select = [];
        $sql_obj->execute($arr_select);
        $detail = $sql_obj->fetchAll(PDO::FETCH_ASSOC);

        $obj_product = $this->connect
            ->prepare("SELECT ma_san_pham FROM san_pham");
        $obj_product->execute($arr_select);
        $product = $obj_product->fetchAll(PDO::FETCH_ASSOC);

        $data_detail = [];
        $data_product = [];

        for ($i = 0; $i < count($detail); $i++) {
            $data_detail[$i] = $detail[$i]['ma_san_pham'];
        }
        for ($i = 0; $i < count($product); $i++) {
            $data_product[$i] = $product[$i]['ma_san_pham'];
        }

        $result =  array_diff($data_product, $data_detail);

        return $result;
    }


    public function getSP()
    {
        $id = $this->check();
        $test = implode("/", $id);
        $data = explode("/", $test);
        $a = [];
        for ($i = 0; $i < count($data); $i++) {
            $sql_obj = $this->connect->prepare("SELECT ma_san_pham, ten_san_pham FROM san_pham WHERE ma_san_pham = :id ");

            $arr_select = [
                ':id' => $data[$i],
            ];
            $sql_obj->execute($arr_select);
            $result = $sql_obj->fetchAll(PDO::FETCH_ASSOC);
           $a[$i] = $result;
        }
        return $a;
    }

    public function addDetail()
    {
        $obj_insert = $this->connect->prepare("INSERT INTO thong_tin_chi_tiet(ma_san_pham, cau_hinh, cam_truoc ,cam_sau ,ram ,dung_luong, giam_gia )
         VALUES (:masp, :cauhinh, :camt , :cams, :ram, :dl, :gg)");
        $arr_insert = [
            ':masp' => $this->ma_san_pham,
            ':cauhinh' => $this->ma_san_pham,
            ':camt' => $this->cam_truoc,
            ':cams' => $this->cam_sau,
            ':ram' => $this->ram,
            ':dl' => $this->dung_luong,
            ':gg' => $this->giam_gia,
        ];
        return $obj_insert->execute($arr_insert);
    }
    public function getMaSP()
    {
        $obj_select = $this->connect->prepare("SELECT ma_san_pham FROM thong_tin_chi_tiet");
        $arr_select = [];
        $obj_select->execute($arr_select);
        $result = $obj_select->fetchAll(PDO::FETCH_ASSOC);
        $data = [];
        // chuyển từ mảng đa chiều thành mảng 1 chiều
        for ($i = 0; $i < count($result); $i++) {
            $data[$i] = $result[$i]['ma_san_pham'];
        }

        return $data;
    }

    public function updateDetail($id)
    {
        $obj_update = $this->connect->prepare("UPDATE thong_tin_chi_tiet SET cau_hinh = :cauhinh, cam_truoc = :camt ,cam_sau = :cams, ram = :ram ,dung_luong = :dl ,  giam_gia = :gg  
         WHERE ma_san_pham = :id");
        $arr_update = [
            ':id' => $id,
            ':cauhinh' => $this->cau_hinh,
            ':camt' => $this->cam_truoc,
            ':cams' => $this->cam_sau,
            ':ram' => $this->ram,
            ':dl' => $this->dung_luong,
            ':gg' => $this->giam_gia,
        ];
        return $obj_update->execute($arr_update);
    }

    public function search()
    {
        $sql_obj = $this->connect->prepare("SELECT san_pham.ten_san_pham , thong_tin_chi_tiet.* FROM san_pham INNER JOIN thong_tin_chi_tiet ON san_pham.ma_san_pham = thong_tin_chi_tiet.ma_san_pham WHERE san_pham.ten_san_pham LIKE :tensp ");
        $arr_select = [
            ':tensp' => '%' . $this->ten_san_pham . '%',
        ];
        $sql_obj->execute($arr_select);
        $count = $sql_obj->rowCount();
        $result = $sql_obj->fetchAll(PDO::FETCH_ASSOC);
        return array($count, $result);
    }



    public function getbyId($id)
    {
        $obj_select = $this->connect
            ->prepare("SELECT san_pham.ten_san_pham , thong_tin_chi_tiet.* FROM san_pham INNER JOIN thong_tin_chi_tiet ON san_pham.ma_san_pham = thong_tin_chi_tiet.ma_san_pham where thong_tin_chi_tiet.ma_san_pham = '$id'");

        $obj_select->execute();
        $result =  $obj_select->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

    public function deletebyId($id){
        $obj_delete = $this->connect
            ->prepare("DELETE FROM thong_tin_chi_tiet WHERE ma_san_pham = '$id'");
        return $obj_delete->execute();
    }
}
