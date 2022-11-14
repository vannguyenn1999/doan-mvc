<?php

class CompanyModel extends BaseModel{

    public $ten_nhan_hieu;
    public $thong_tin;


    const TABLE_NAME = 'nhan_hieu';
    public function getTable(){
        return $this->_SelectAll(self::TABLE_NAME);
    }

    public function addCompany(){
        $obj_insert = $this->connect->prepare("INSERT INTO nhan_hieu(ten_nhan_hieu, thong_tin) VALUES (:tennh, :tt)");
        $arr_insert = [
            
            ':tennh' => $this->ten_nhan_hieu,
            ':tt' => $this->thong_tin,
            
        ];
        return $obj_insert->execute($arr_insert);
    }

    public function updateCompany($id)
    {
        $obj_update = $this->connect->prepare("UPDATE nhan_hieu SET thong_tin = :tt  WHERE ten_nhan_hieu = :id ");
        $arr_update = [
            ':id' => $id,
            ':tt' => $this->thong_tin,
        ];
        return $obj_update->execute($arr_update);
    }

    public function getbyId($id)
    {
        $obj_select = $this->connect
            ->prepare("SELECT * FROM nhan_hieu WHERE ten_nhan_hieu = '$id'");
        $obj_select->execute();
        $result =  $obj_select->fetch(PDO::FETCH_ASSOC);

        return $result;
    }
    public function deletebyId($id){
        $obj_delete = $this->connect
            ->prepare("DELETE FROM nhan_hieu WHERE ten_nhan_hieu = '$id'");
        return $obj_delete->execute();
    }

    public function check()
    {
        $obj_select = $this->connect->prepare("SELECT ten_nhan_hieu FROM nhan_hieu");
        $arr_select = [];
        $obj_select->execute($arr_select);
        $result = $obj_select->fetchAll(PDO::FETCH_ASSOC);
        $data = [];

        for ($i = 0; $i < count($result); $i++) {
            $data[$i] = $result[$i]['ten_nhan_hieu'];
        }

        return $data;
    }
}