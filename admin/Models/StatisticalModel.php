<?php

class StatisticalModel extends BaseModel
{

    public function getAll()
    {
        $obj_sql = $this->connect->prepare('SELECT trang_thai , COUNT(trang_thai)AS num_status FROM don_hang GROUP BY trang_thai');
        if ($obj_sql->execute()) {
            if ($obj_sql->rowCount() > 0) {
                $result = $obj_sql->fetchAll(PDO::FETCH_ASSOC);
            }
        }
        return $result;
    }

    public function mostProduct()
    {
        $obj_sql = $this->connect->prepare('SELECT ten_san_pham , so_luong FROM chi_tiet_don_hang WHERE so_luong > 1 ORDER BY so_luong DESC LIMIT 8');
        if ($obj_sql->execute()) {
            if ($obj_sql->rowCount() > 0) {
                $result = $obj_sql->fetchAll(PDO::FETCH_ASSOC);
            }
        }
        return $result;
    }

    public function stillProduct($id)
    {
        $trang = ($id - 1) * 8;
        $obj_sql = $this->connect->prepare("SELECT ten_san_pham,ma_san_pham,anh,so_luong FROM san_pham  ORDER BY so_luong ASC LIMIT $trang ,8  ");
        $arr = [];
        $obj_sql->execute($arr);
        return $result = $obj_sql->fetchAll(PDO::FETCH_ASSOC);
    }
    public function updateSL($masp, $sl)
    {
        $obj_sql = $this->connect->prepare("UPDATE san_pham SET so_luong = :sl WHERE ma_san_pham = :masp ");
        $arr = [
            ':sl' => $sl,
            ':masp' => $masp,
        ];
        return $obj_sql->execute($arr);
    }
}
