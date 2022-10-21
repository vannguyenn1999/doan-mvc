<?php

class ProductModel extends BaseModel {
    protected $id;
    protected $title;
    protected $price;
    protected $avatar;
    protected $content;
    protected $create_at;

    const  TABLE_NAME = 'products';

    public function getTable(){
        return $this->_SelectAll(self::TABLE_NAME);
    }
    public function addProduct(){
        $sql_insert = "INSERT INTO products(title, price, avatar,content) VALUES ('$this->title', '$this->price' , '$this->avatar' ,'$this->content)";
        $isInsert = mysqli_query($this->conn , $sql_insert);
        return $isInsert;
       
    }
}