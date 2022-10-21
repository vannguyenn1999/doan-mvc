<?php

class DetailModel extends BaseModel {

    const TABLE_NAME = 'thong_tin_san_pham';

    public function getTable(){
        $sql = "SELECT san_pham.ten_san_pham , thong_tin_chi_tiet.* FROM san_pham INNER JOIN thong_tin_chi_tiet ON san_pham.ma_san_pham = thong_tin_chi_tiet.ma_san_pham";
        $result = mysqli_query($this->conn, $sql);
        return $result;

    }

    public function getbyId($id){
        $sql = "SELECT san_pham.ten_san_pham , thong_tin_chi_tiet.* FROM san_pham INNER JOIN thong_tin_chi_tiet ON san_pham.ma_san_pham = thong_tin_chi_tiet.ma_san_pham where thong_tin_chi_tiet.ma_san_pham = '$id'";
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }
}