<?php

class BaseModel extends Database{
    
    protected $conn;

    public function __construct()
    {
        $this->conn = $this->connection();
    }

   

    public function _SelectAll($tableName){
      $sql_obj = $this->connect->prepare("SELECT * FROM {$tableName} ORDER BY create_at DESC ");
      $arr_select = [];
      $sql_obj->execute($arr_select);
      $result = $sql_obj->fetchAll(PDO::FETCH_ASSOC);

      return $result;

    }

    public function printProduct($id){
      $sql_obj = $this->connect->prepare("SELECT don_hang.* , chi_tiet_don_hang.* FROM don_hang INNER JOIN chi_tiet_don_hang ON don_hang.ma_don_hang = chi_tiet_don_hang.ma_don_hang WHERE don_hang.ma_don_hang = :id;");
      $arr_select = [
        ':id' => $id,
      ];
      $sql_obj->execute($arr_select);
      $result = $sql_obj->fetchAll(PDO::FETCH_ASSOC);

      return $result;
    }

    public function getMaHD()
    {
        $obj_select = $this->connect->prepare("SELECT ma_hoa_don FROM hoa_don");
        $arr_select = [];
        $obj_select->execute($arr_select);
        $result = $obj_select->fetchAll(PDO::FETCH_ASSOC);
        $data = [];

        for ($i = 0; $i < count($result); $i++) {
            $data[$i] = $result[$i]['ma_hoa_don'];
        }

        return $data;
    }

   


}
