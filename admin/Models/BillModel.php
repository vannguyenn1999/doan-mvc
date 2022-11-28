<?php

class BillModel extends BaseModel
{
    public function dataChart()
    {
        $obj_sql = $this->connect->prepare('SELECT trang_thai , COUNT(trang_thai)AS num_status FROM don_hang GROUP BY trang_thai');
        if ($obj_sql->execute()) {
            if ($obj_sql->rowCount() > 0) {
                $result = $obj_sql->fetchAll(PDO::FETCH_ASSOC);
            }
        }
        return $result;
    }

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

    public function deletebyId($id)
    {

        $obj_delete2 = $this->connect->prepare("DELETE FROM chi_tiet_don_hang WHERE ma_don_hang = '$id'");
        $result2 =  $obj_delete2->execute();
        $obj_delete = $this->connect->prepare("DELETE FROM don_hang WHERE ma_don_hang = '$id'");
        $result1 =  $obj_delete->execute();
        if($result1 && $result2) {
            return true;
        }

        return false;
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
