<?php

class UserModel extends BaseModel
{

    public $mahd;
    public $ten_nguoi_dat;
    public $email_nguoi_nhan;
    public $sdt_nguoi_nhan;
    public $dc_nguoi_nhan;
    public $ghi_chu;
    public $phuong_thuc;
    public $tong;
    public $trang_thai = 'chờ xử lý';

    public $ma_sp;
    public $ten_san_pham;
    public $so_luong;
    public $gia;
    public $thanh_tien;



    public function getTable()
    {
        $obj_select = $this->connect->prepare("SELECT * FROM san_pham ORDER BY create_at DESC LIMIT 8");
        $arr = [];
        $obj_select->execute($arr);
        $result = $obj_select->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    public function check()
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

    public function getProduct($id)
    {
        $obj_sql = $this->connect->prepare("SELECT ma_san_pham, ten_san_pham, so_luong, gia ,anh FROM san_pham WHERE ma_san_pham = :id");
        $arr = [
            ':id' => $id,
        ];
        $obj_sql->execute($arr);
        return  $obj_sql->fetch(PDO::FETCH_ASSOC);
    }

    public function moreProduct($id)
    {
        $obj_sql = $this->connect->prepare("SELECT ten_nhan_hieu FROM san_pham WHERE ma_san_pham = :id ");
        $arr = [
            ':id' => $id,
        ];
        $obj_sql->execute($arr);
        $result =  $obj_sql->fetch(PDO::FETCH_ASSOC);
        $name = implode('', $result);
        $obj_sql = $this->connect->prepare("SELECT ma_san_pham, ten_san_pham, anh FROM san_pham WHERE ten_nhan_hieu LIKE '%$name%' LIMIT 5 ");
        $obj_sql->execute();
        $result =  $obj_sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function detailProduct($id)
    {
        $obj_sql = $this->connect->prepare("SELECT san_pham.* ,  thong_tin_chi_tiet.*  FROM san_pham
        INNER JOIN thong_tin_chi_tiet ON san_pham.ma_san_pham = thong_tin_chi_tiet.ma_san_pham WHERE thong_tin_chi_tiet.ma_san_pham = :id ");
        $arr = [
            ':id' => $id,
        ];
        $obj_sql->execute($arr);
        $result =  $obj_sql->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function page($id)
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
    public function addCart()
    {
        $obj_insert = $this->connect->prepare("INSERT INTO don_hang (ma_don_hang, ten_nguoi_dat, email_nguoi_nhan, sdt_nguoi_nhan, dc_nguoi_nhan, ghi_chu, phuong_thuc ,tong, trang_thai) VALUES (:mahd, :fullname, :email, :phone, :dc, :note, :pt , :t ,:trang_thai)");
        $arr = [
            ':mahd' => $this->mahd,
            ':fullname' => $this->ten_nguoi_dat,
            ':email' => $this->email_nguoi_nhan,
            ':phone' => $this->sdt_nguoi_nhan,
            ':dc' => $this->dc_nguoi_nhan,
            ':note' => $this->ghi_chu,
            ':pt' => $this->phuong_thuc,
            ':t' => $this->tong,
            ':trang_thai' => $this->trang_thai,
        ];
        return $obj_insert->execute($arr);
    }

    public function addInvoice()
    {
        $obj_insert = $this->connect->prepare("INSERT INTO chi_tiet_don_hang (ma_don_hang, ma_san_pham, ten_san_pham, so_luong, gia, thanh_tien) VALUES (:mahd, :masp, :tensp, :sl, :g, :tt)");
        $arr = [
            ':mahd' => $this->mahd,
            ':masp' => $this->ma_sp,
            ':tensp' => $this->ten_san_pham,
            ':sl' => $this->so_luong,
            ':g' => $this->gia,
            ':tt' => $this->thanh_tien,
        ];
        return $obj_insert->execute($arr);
    }

    public function getInvoice()
    {
        $obj_sql = $this->connect->prepare("SELECT * FROM don_hang ORDER BY create_at DESC LIMIT 1");
        $arr = [];
        $obj_sql->execute($arr);
        return $obj_sql->fetch(PDO::FETCH_ASSOC);
    }

    public function getDetailInvoice($id)
    {

        
        $obj_sql = $this->connect->prepare("SELECT chi_tiet_don_hang.* , san_pham.anh FROM chi_tiet_don_hang INNER JOIN san_pham ON chi_tiet_don_hang.ma_san_pham = san_pham.ma_san_pham WHERE chi_tiet_don_hang.ma_don_hang = :id;
        
        ");
        $arr = [
            ':id' => $id
        ];
        $obj_sql->execute($arr);
        return $obj_sql->fetchAll(PDO::FETCH_ASSOC);
    }

    
    public function updateProduct($id)
    {
        $obj_sql = $this->connect->prepare("SELECT so_luong FROM san_pham WHERE ma_san_pham = :id");
        $arr = [
            ':id' => $id,
        ];
        $obj_sql->execute($arr);
        $result = $obj_sql->fetch(PDO::FETCH_ASSOC);
        foreach ($result as $value) :
            $num = (int)$value;
        endforeach;
        $obj_sql = $this->connect->prepare("UPDATE san_pham SET so_luong = :sl WHERE ma_san_pham = :id");
        $arr = [
            ':id' =>$this->ma_sp ,
            ':sl' => ($num - $this->so_luong),
        ];
        return $obj_sql->execute($arr);

    }
}
