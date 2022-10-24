<?php

class DetailModel extends BaseModel {

    const TABLE_NAME = 'thong_tin_san_pham';

    public function getTable(){
        $sql = "";
        $obj_select = $this->connect
        ->prepare("SELECT san_pham.ten_san_pham , thong_tin_chi_tiet.* FROM san_pham INNER JOIN thong_tin_chi_tiet ON san_pham.ma_san_pham = thong_tin_chi_tiet.ma_san_pham
                    ");

    $arr_select = [];
    $obj_select->execute($arr_select);
    $products = $obj_select->fetchAll(PDO::FETCH_ASSOC);

    return $products;

    }

    public function getbyId($id){
        $obj_select = $this->connect
        ->prepare("SELECT san_pham.ten_san_pham , thong_tin_chi_tiet.* FROM san_pham INNER JOIN thong_tin_chi_tiet ON san_pham.ma_san_pham = thong_tin_chi_tiet.ma_san_pham where thong_tin_chi_tiet.ma_san_pham = '$id'");

    $obj_select->execute();
    $result =  $obj_select->fetch(PDO::FETCH_ASSOC);
    
    return $result;
    }
}