<?php

class BillModel extends BaseModel
{
   

    public function getTable()
    {
        $sql_obj = $this->connect->prepare("SELECT * FROM don_hang WHERE trang_thai = 'đã xử lý' ORDER BY create_at DESC ");
        $arr_select = [];
        $sql_obj->execute($arr_select);
        $result = $sql_obj->fetchAll(PDO::FETCH_ASSOC);
  
        return $result;
    }
    public function getTableHandle()
    {
        $sql_obj = $this->connect->prepare("SELECT * FROM don_hang WHERE trang_thai = 'chờ xử lý' ORDER BY create_at DESC ");
        $arr_select = [];
        $sql_obj->execute($arr_select);
        $result = $sql_obj->fetchAll(PDO::FETCH_ASSOC);
  
        return $result;
    }
    
    public function getbyId($id)
    {
        
        $obj_select = $this->connect
            ->prepare("SELECT * FROM chi_tiet_don_hang WHERE ma_don_hang = '$id'");
        $obj_select->execute();
        $result =  $obj_select->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getMaHD()
    {
        $obj_select = $this->connect->prepare("SELECT ma_don_hang FROM don_hang");
        $arr_select = [];
        $obj_select->execute($arr_select);
        $result = $obj_select->fetchAll(PDO::FETCH_ASSOC);
        $data = [];

        for ($i = 0; $i < count($result); $i++) {
            $data[$i] = $result[$i]['ma_don_hang'];
        }

        return $data;
    }

    public function update($id)
    {
        $obj_update = $this->connect->prepare("UPDATE don_hang SET trang_thai = 'đã xử lý'  WHERE ma_don_hang = :id ");
        $arr_update = [
            ':id' => $id,
        ];
        return $obj_update->execute($arr_update);
    }
}
