<?php

class BaseModel extends Database{
    
    protected $conn;

    public function __construct()
    {
        $this->conn = $this->connection();
    }

   

    public function _SelectAll($tableName){
      $sql_obj = $this->connect->prepare("SELECT * FROM {$tableName} ");
      $arr_select = [];
      $sql_obj->execute($arr_select);
      $result = $sql_obj->fetchAll(PDO::FETCH_ASSOC);

      return $result;

    }

   


}
