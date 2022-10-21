<?php

class ProductModel extends BaseModel {
    protected $id;
    protected $title;
    protected $price;
    protected $avatar;
    protected $content;
    protected $create_at;

    const  TABLE_NAME = 'san_pham';

    public function getTable(){
        return $this->_SelectAll(self::TABLE_NAME);
    }
    public function addProduct(){
        $sql_insert = "INSERT INTO san_pham(title, price, avatar,content) VALUES ('$this->title', '$this->price' , '$this->avatar' ,'$this->content)";
        $isInsert = mysqli_query($this->conn , $sql_insert);
        return $isInsert;
       
    }

    public function getbyId($id){
        $sql_select = "SELECT * FROM san_pham WHERE ma_san_pham = '$id'";
        $result = mysqli_query($this->conn, $sql_select);
        return $result;
    }

    public function deletebyId($id){
        return $this->_Delete(self::HOST_NAME,$id);
    }
}