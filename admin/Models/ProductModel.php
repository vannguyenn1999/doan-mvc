<?php

class ProductModel extends BaseModel
{
    public $ma_san_pham;
    public $ten_san_pham;
    public $anh;
    public $so_luong;
    public $kieu;
    public $ten_nhan_hieu;
    public $thong_tin;
    public $gia;

    const  TABLE_NAME = 'san_pham';

    public function getTable($id)
    {
        $page = ($id - 1) * 8;
        $obj_select = $this->connect->prepare("SELECT * FROM san_pham LIMIT $page , 8");
        $arr = [
            // ':id' => $page,
        ];
        $obj_select->execute($arr);
        $result = $obj_select->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function addProduct()
    {
        $obj_insert = $this->connect->prepare("INSERT INTO san_pham(ma_san_pham, ten_san_pham, anh, so_luong, id_kieu, ten_nhan_hieu, thong_tin, gia) VALUES
       (:masp, :tensp, :anh, :sl ,:kieu ,:tennh, :tt, :gia)");
        $arr_insert = [
            ':masp' => $this->ma_san_pham,
            ':tensp' => $this->ten_san_pham,
            ':anh' => $this->anh,
            ':kieu' => $this->kieu,
            ':sl' => $this->so_luong,
            ':tennh' => $this->ten_nhan_hieu,
            ':tt' => $this->thong_tin,
            ':gia' => $this->gia
        ];
        return $obj_insert->execute($arr_insert);
    }

    public function updateProduct($id)
    {
        $obj_update = $this->connect->prepare("UPDATE san_pham SET ten_san_pham = :tensp , anh = :anh, so_luong = :sl, id_kieu = :kieu, ten_nhan_hieu = :tennh, thong_tin = :tt , gia = :gia WHERE ma_san_pham = :id ");
        $arr_update = [
            ':id' => $id,
            ':tensp' => $this->ten_san_pham,
            ':anh' => $this->anh,
            ':kieu' => $this->kieu,
            ':sl' => $this->so_luong,
            ':tennh' => $this->ten_nhan_hieu,
            ':tt' => $this->thong_tin,
            ':gia' => $this->gia
        ];
        return $obj_update->execute($arr_update);
    }

    public function getbyId($id)
    {
        $obj_select = $this->connect
            ->prepare("SELECT * FROM san_pham WHERE ma_san_pham = '$id'");
        $obj_select->execute();
        $result =  $obj_select->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

    public function getImage($id)
    {
        $obj_select = $this->connect
            ->prepare("SELECT anh FROM san_pham WHERE ma_san_pham = '$id'");
        $obj_select->execute();
        $result =  $obj_select->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    public function getMaSP()
    {
        $obj_select = $this->connect->prepare("SELECT ma_san_pham FROM san_pham");
        $arr_select = [];
        $obj_select->execute($arr_select);
        $result = $obj_select->fetchAll(PDO::FETCH_ASSOC);
        $data = [];

        for ($i = 0; $i < count($result); $i++) {
            $data[$i] = $result[$i]['ma_san_pham'];
        }

        return $data;
    }

    public function deletebyId($id)
    {
        $obj_delete = $this->connect
            ->prepare("DELETE FROM san_pham WHERE ma_san_pham = '$id'");
        return $obj_delete->execute();
    }

    public function search()
    {
        $sql_obj = $this->connect->prepare("SELECT * FROM san_pham Where ten_san_pham LIKE :tensp ");
        $arr_select = [
            ':tensp' => '%' . $this->ten_san_pham . '%',
        ];
        $sql_obj->execute($arr_select);
        $count = $sql_obj->rowCount();
        $result = $sql_obj->fetchAll(PDO::FETCH_ASSOC);
        return array($count, $result);
    }
}
