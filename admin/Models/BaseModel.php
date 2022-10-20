<?php

class BaseModel extends Database{
    
    protected $conn;

    public function __construct()
    {
        $this->conn = $this->connection();;
    }

    protected function _query($sql){
        return mysqli_query($this->conn, $sql);
    }

    public function getAll($tableName){
        $sql = "SELECT * FROM {$tableName}";
        $isSql = $this->_query($sql);
        $data = [];
        while ( $row = mysqli_fetch_assoc($isSql)){
            array_push($data,$row);
        }
        return $data;
    }


}
